<?php

namespace App\Http\Controllers\API;

use App\Models\Server;
use App\Filters\ServersFilters;
use App\Http\Controllers\Controller;
use App\Transformers\ServerTransformer;

class ServersController extends Controller
{
	/**
	 * Loads all records
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index () {
		$servers = Server::all();
		
		return $this->transformedResponse($servers);
    }
	
	/**
	 * Applies request filters on server model and returns response
	 *
	 * @param ServersFilters $filters
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function filter ( ServersFilters $filters ) {
		$servers = Server::filter($filters)->get();
		
		return $this->transformedResponse($servers);
    }
	
	/**
	 * Generate a transformed response and send as JSON
	 *
	 * @param \Illuminate\Database\Eloquent\Collection $servers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function transformedResponse ( $servers ) {
		$response = fractal($servers, new ServerTransformer)->toArray();
		
		return response()->json($response, 200);
	}
}
