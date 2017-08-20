<?php

namespace App\Transformers;

use App\Models\Server;
use League\Fractal\TransformerAbstract;

class ServerTransformer extends TransformerAbstract
{
	protected $defaultIncludes = ['location'];
	
	public function transform ( Server $server ) {
		return [
			'id'        => $server->id,
			'model'     => $server->model_name,
			'ram'       => $server->formattedRAMString(),
			'storage'   => $server->formattedStorageString(),
			'price'     => $server->price,
			'currency'  => currency_symbol($server->currency)
		];
	}
	
	public function includeLocation ( Server $server ) {
		return $this->item($server->location, new LocationTransformer);
	}
}