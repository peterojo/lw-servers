<?php

namespace App\Filters;

use App\Models\Location;

class ServersFilters extends Filters
{
	protected $filters = ['min_storage', 'max_storage', 'ram', 'disk_type', 'location'];
	
	public function min_storage ( $min ) {
		return $this->builder->where('strg_capacity_gb', '>=', $min);
	}
	
	public function max_storage ( $max ) {
		return $this->builder->where('strg_capacity_gb', '<=', $max);
	}
	
	public function ram ( $sizes ) {
		$sizes = explode(",", $sizes);
		
		return $this->builder->whereIn('ram_size', $sizes);
	}
	
	public function disk_type ( $type ) {
		return $this->builder->where('strg_type', $type);
	}
	
	public function location ( $abbr ) {
		$location = Location::where('abbr', $abbr)->first();
		
		return $location ? $this->builder->where('location_id', $location->id) : $this->builder;
	}
}