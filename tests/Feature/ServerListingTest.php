<?php

namespace Tests\Feature;

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
        $transformedServersData = fractal($servers, new ServerTransformer)->toArray();
        
        $this->assertEquals($transformedServersData, $response->json());
    }
}
