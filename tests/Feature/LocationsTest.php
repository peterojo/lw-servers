<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Location;
use App\Transformers\LocationTransformer;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LocationsTest extends TestCase
{
    use DatabaseMigrations;
    
    /** @test */
    public function it_fetches_all_locations_in_database()
    {
    	# Given that we have 5 locations
    	$locations = factory(Location::class, 5)->create();
     
    	# When we hit the locations.index API
	    $response = $this->get(route('locations.index'))->json();
	    
	    # We get the transformed data containing all 5 locations
	    $this->assertCount(5, $response['data']);
	    $this->assertEquals(
	    	fractal($locations, new LocationTransformer)->toArray(),
		    $response
	    );
    }
}
