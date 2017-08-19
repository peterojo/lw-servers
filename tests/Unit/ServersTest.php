<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Server;
use App\Models\Location;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ServersTest extends TestCase
{
    use DatabaseMigrations;
    
    protected $server;
    
    function setUp () {
	    parent::setUp();
	    $this->server = factory(Server::class)->create();
    }
	
	/** @test */
    public function it_has_a_location()
    {
	    $this->assertInstanceOf(Location::class, $this->server->location);
    }
    
    /** @test */
    public function it_can_transform_storage_capacity_into_appropriate_unit()
    {
        $gb_capacity_server = factory(Server::class)->create(['strg_capacity_gb' => '600']);
        $tb_capacity_server = factory(Server::class)->create(['strg_capacity_gb' => '1200']);
        
        $this->assertEquals("600GB", $gb_capacity_server->formattedCapacity());
        $this->assertEquals("1.2TB", $tb_capacity_server->formattedCapacity());
    }
}
