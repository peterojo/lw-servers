<?php

namespace App\Http\Controllers\API;

use App\Models\Server;
use App\Filters\ServersFilters;
use App\Http\Controllers\Controller;
use App\Transformers\ServerTransformer;
use Illuminate\Database\Eloquent\Collection;

class ServersController extends Controller
{
	public function index () {
		$servers = Server::all();
		
		return $this->respondWithCollection($servers);
    }
	
	public function filter ( ServersFilters $filters ) {
		$servers = Server::filter($filters)->get();
		
		return $this->respondWithCollection($servers);
    }
	
	/**
	 * Generate a transformed response and send as JSON
	 *
	 * @param Collection $servers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function respondWithCollection ( Collection $servers ) {
		$response = fractal($servers, new ServerTransformer)->toArray();
		
		return response()->json($response, 200);
	}
}
