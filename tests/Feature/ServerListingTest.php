<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Server;
use App\Models\Location;
use App\Transformers\ServerTransformer;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ServerListingTest extends TestCase
{
	use DatabaseMigrations;
	
    /** @test */
    public function it_lists_all_servers_in_database()
    {
    	# Given that we have 5 servers in DB
        $servers = factory(Server::class, 5)->create();
        
        # When we call the index api
        $response = $this->get(route('servers.index'));
        
        # It loads all servers
        $this->assertEquals($this->transformServerData($servers), $response->json());
    }
    
    /** @test */
    public function it_filters_servers_by_storage_capacity_range()
    {
    	# Given that we have 5 servers, one below and one above the specified range
    	$serverWithStorageBelowRange = factory(Server::class)->create(['strg_quantity' => 1, 'strg_capacity_gb' => '750']);
    	factory(Server::class)->create(['strg_quantity' => 2, 'strg_capacity_gb' => 750]);
    	factory(Server::class)->create(['strg_quantity' => 1, 'strg_capacity_gb' => 2000]);
    	factory(Server::class)->create(['strg_quantity' => 4, 'strg_capacity_gb' => 1000]);
    	$serverWithStorageAboveRange = factory(Server::class)->create(['strg_quantity' => 4, 'strg_capacity_gb' => 1500]);
    	
    	# When we call the filter api with min and max parameters
    	$response = $this->get(route('servers.filter')."?min_storage=1000&max_storage=4000")->json();
	    
    	# It loads only the 3 records within the range
	    $this->assertCount(3, $response['data']);
	    $this->assertNotContains(
		    $this->transformServerData($serverWithStorageBelowRange, true),
		    $response['data']
	    );
	    $this->assertNotContains(
	    	$this->transformServerData($serverWithStorageAboveRange, true),
		    $response['data']
	    );
    }
    
    /** @test */
    public function it_filters_servers_by_ram_size()
    {
    	# Given that we have 5 servers with various ram sizes
        factory(Server::class)->create(['ram_size' => '4gb']);
        factory(Server::class)->create(['ram_size' => '8gb']);
        $server16gb = factory(Server::class)->create(['ram_size' => '16gb']);
        factory(Server::class)->create(['ram_size' => '64gb']);
        factory(Server::class)->create(['ram_size' => '64gb']);
        
        # When we call the filter api with a list of ram sizes
        $response = $this->get(route('servers.filter')."?ram=4gb,8gb,64gb")->json();
        
        # It returns only the servers with ram sizes specified
        $this->assertCount(4, $response['data']);
        $this->assertNotContains(
        	$this->transformServerData($server16gb, true),
	        $response['data']
        );
    }
    
    /** @test */
    public function it_filters_servers_by_harddisk_type()
    {
    	# Given that we have 4 servers, 3 with SSD storage and 1 with SATA2 storage
        factory(Server::class, 3)->create(['strg_type' => 'SSD']);
        $sata2DiskServer = factory(Server::class)->create(['strg_type' => 'SATA2']);
        
        # When we call the filter api with the disk_type parameter
        $response = $this->get(route('servers.filter')."?disk_type=SSD")->json();
        
        # It returns only the servers with the specified disk type
        $this->assertCount(3, $response['data']);
        $this->assertNotContains(
        	$this->transformServerData($sata2DiskServer, true),
	        $response['data']
        );
    }
    
    /** @test */
    public function it_filters_server_by_location()
    {
    	# Given that we have 3 servers from one location and another from another location
    	$location = factory(Location::class)->create(['abbr' => 'AMS']);
    	$otherLocation = factory(Location::class)->create(['abbr' => 'XYZ']);
    	
        factory(Server::class, 3)->create(['location_id' => $location->id]);
        $serverInOtherLocation = factory(Server::class)->create(['location_id' => $otherLocation->id]);
        
        # When we call the filter api with the location parameter
        $response = $this->get(route('servers.filter')."?location=AMS")->json();
	
        # It should return only the servers from the specified location
	    $this->assertCount(3, $response['data']);
	    $this->assertNotContains(
		    $this->transformServerData($serverInOtherLocation, true),
		    $response['data']
	    );
    }
	
	/**
	 * Transforms servers collection/item with the same transformer used for API
	 * response. If the $onlyData parameter is set to true, it returns only
	 * the value of the 'data' key in the transformed array
	 *
	 * @param \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model $servers
	 * @param bool $onlyData
	 *
	 * @return array
	 */
	protected function transformServerData($servers, $onlyData = false) {
	    $transformed = fractal($servers, new ServerTransformer)->toArray();
	    
	    return $onlyData ? $transformed['data'] : $transformed;
    }
}
