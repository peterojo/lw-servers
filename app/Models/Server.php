<?php

namespace App\Models;

use App\Filters\ServersFilters;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = "servers";
    
    public $timestamps = false;
	
	/**
	 * Defines the belongsTo relationship for the server location.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function location () {
    	return $this->belongsTo(Location::class, 'location_id');
    }
	
	/**
	 * Returns a formatted representation of the server RAM
	 * for display purposes.
	 *
	 * @return string
	 */
	public function formattedRAMString () {
		return strtoupper($this->ram_size)." ".$this->ram_type;
    }
	
	/**
	 * Returns a formatted representation of the storage
	 * capacity for display purposes.
	 *
	 * @return string
	 */
	public function formattedCapacity () {
		$unit = "GB";
		$value = $this->strg_capacity_gb;
		
		if ($value >= 1000) {
			$value = $value/1000;
			$unit = "TB";
		}
		
		return $value.$unit;
    }
	
	/**
	 * Returns a formatted representation of the storage details
	 * for display purposes.
	 *
	 * @return string
	 */
	public function formattedStorageString () {
		return $this->strg_quantity." X ".$this->formattedCapacity()." ".$this->strg_type;
    }
	
	/**
	 * Applies filters using Eloquent query scopes and injecting
	 * the $filters object.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $builder
	 * @param \App\Filters\ServersFilters $filters
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeFilter ( $builder, ServersFilters $filters ) {
		return $filters->apply($builder);
    }
}
