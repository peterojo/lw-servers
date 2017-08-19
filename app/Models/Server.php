<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = "servers";
    
    public $timestamps = false;

    public function location () {
    	return $this->belongsTo(Location::class, 'location_id');
    }
	
	public function formattedRAMString () {
		return strtoupper($this->ram_size)." ".$this->ram_type;
    }
	
	public function formattedCapacity () {
		$unit = "GB";
		$value = $this->strg_capacity_gb;
		if ($value >= 1000) {
			$value = $value/1000;
			$unit = "TB";
		}
		
		return $value.$unit;
    }
	
	public function formattedStorageString () {
		return $this->strg_quantity." X ".$this->formattedCapacity()." ".$this->strg_type;
    }
}
