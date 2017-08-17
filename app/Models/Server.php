<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = "servers";
    
    public $timestamps = false;

    public function model () {
    	return $this->belongsTo(ServerModel::class, 'model_id');
    }

    public function location () {
    	return $this->belongsTo(Location::class, 'location_id');
    }
}
