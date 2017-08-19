<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;
use App\Transformers\ServerTransformer;

class ServersController extends Controller
{
	public function index () {
		$servers = fractal(Server::all(), new ServerTransformer)->toArray();
		
		return response()->json($servers, 200);
    }
	
	public function filter () {
		
    }
}
