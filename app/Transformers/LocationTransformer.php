<?php

namespace App\Transformers;

use App\Models\Location;
use League\Fractal\TransformerAbstract;

class LocationTransformer extends TransformerAbstract
{
	/**
	 * Defines rules for transforming Location object.
	 *
	 * @param \App\Models\Location $location
	 *
	 * @return array
	 */
	public function transform ( Location $location ) {
		return [
			'abbr'  => $location->abbr,
			'name'  => $location->name
		];
	}
}