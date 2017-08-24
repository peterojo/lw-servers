<?php

namespace App\Filters;

use App\Models\Location;
use Illuminate\Support\Facades\DB;

class ServersFilters extends Filters
{
	protected $filters = ['min_storage', 'max_storage', 'ram', 'disk_type', 'location'];
	
	public function min_storage ( $min ) {
		$min = raw_gb_capacity($min);
		return $this->builder->whereRaw('(strg_quantity*strg_capacity_gb) >= '.$min)->from(DB::raw('servers'));
	}
	
	public function max_storage ( $max ) {
		$max = raw_gb_capacity($max);
		return $this->builder->whereRaw('(strg_quantity*strg_capacity_gb) <= '.$max);
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