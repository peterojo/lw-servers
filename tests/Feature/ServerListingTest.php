<?php

namespace Tests\Feature;

use App\Models\Location;
use Tests\TestCase;
use App\Models\Server;
use App\Transformers\ServerTransformer;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ServerListingTest extends TestCase
{
	use DatabaseMigrations;
	
    /** @test */
    public function it_lists_all_servers_in_database()
    {
        $servers = factory(Server::class, 5)->create();
        $response = $this->get(route('servers.index'));
        
        $this->assertEquals($this->transformServerData($servers), $response->json());
    }
    
    /** @test */
    public function it_filters_servers_by_storage_capacity_range()
    {
    	factory(Server::class, 3)->create(['strg_capacity_gb' => 750]);
    	$serverWithStorageOutOfRange = factory(Server::class)->create(['strg_capacity_gb' => 1500]);
    	
    	$response = $this->get(route('servers.filter')."?min_storage=0&max_storage=1000")->json();
	    
	    $this->assertCount(3, $response['data']);
	    $this->assertNotContains(
	    	$this->transformServerData($serverWithStorageOutOfRange, true),
		    $response['data']
	    );
    }
    
    /** @test */
    public function it_filters_servers_by_ram_size()
    {
        factory(Server::class)->create(['ram_size' => '4gb']);
        factory(Server::class)->create(['ram_size' => '8gb']);
        $server16gb = factory(Server::class)->create(['ram_size' => '16gb']);
        factory(Server::class)->create(['ram_size' => '64gb']);
        factory(Server::class)->create(['ram_size' => '64gb']);
        
        $response = $this->get(route('servers.filter')."?ram=4gb,8gb,64gb")->json();
        
        $this->assertCount(4, $response['data']);
        $this->assertNotContains(
        	$this->transformServerData($server16gb, true),
	        $response['data']
        );
    }
    
    /** @test */
    public function it_filters_servers_by_harddisk_type()
    {
        factory(Server::class, 3)->create(['strg_type' => 'SSD']);
        $sata2DiskServer = factory(Server::class)->create(['strg_type' => 'SATA2']);
        
        $response = $this->get(route('servers.filter')."?disk_type=SSD")->json();
        
        $this->assertCount(3, $response['data']);
        $this->assertNotContains(
        	$this->transformServerData($sata2DiskServer, true),
	        $response['data']
        );
    }
    
    /** @test */
    public function it_filters_server_by_location()
    {
    	$location = factory(Location::class)->create(['abbr' => 'AMS']);
    	$otherLocation = factory(Location::class)->create(['abbr' => 'XYZ']);
        factory(Server::class, 3)->create(['location_id' => $location->id]);
        $serverInOtherLocation = factory(Server::class)->create(['location_id' => $otherLocation->id]);
        
        $response = $this->get(route('servers.filter')."?location=AMS")->json();
	
	    $this->assertCount(3, $response['data']);
	    $this->assertNotContains(
		    $this->transformServerData($serverInOtherLocation, true),
		    $response['data']
	    );
    }
    
    protected function transformServerData($servers, $onlyData = false) {
	    $transformed = fractal($servers, new ServerTransformer)->toArray();
	    
	    return $onlyData ? $transformed['data'] : $transformed;
    }
}
