<?php

namespace App\Transformers;

use App\Models\Server;
use League\Fractal\TransformerAbstract;

class ServerTransformer extends TransformerAbstract
{
	protected $defaultIncludes = ['location'];
	
	/**
	 * Defines rules for transforming Server object.
	 *
	 * @param \App\Models\Server $server
	 *
	 * @return array
	 */
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
	
	/**
	 * Defines 'location' as a child object to be added to the server
	 * object.
	 *
	 * @param Server $server
	 *
	 * @return \League\Fractal\Resource\Item
	 */
	public function includeLocation ( Server $server ) {
		return $this->item($server->location, new LocationTransformer);
	}
}