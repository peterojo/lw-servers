<?php

namespace App\Transformers;

use App\Models\Location;
use League\Fractal\TransformerAbstract;

class LocationTransformer extends TransformerAbstract
{
	public function transform ( Location $location ) {
		return [
			'abbr'  => $location->abbr,
			'name'  => $location->name
		];
	}
}