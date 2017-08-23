<?php

namespace App\Http\Controllers\API;

use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Transformers\LocationTransformer;

class LocationsController extends Controller
{
	/**
	 * Load all locations
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index () {
		$locations = Location::all();
		
		$response = fractal($locations, new LocationTransformer)->toArray();
		
		return response()->json($response, 200);
    }
}
