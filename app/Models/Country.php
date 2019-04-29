<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Squad;

class Country extends Model
{
   	protected $guarded = [];

   	public function group(){
   		return $this->belongsToMany('App\Models\Group');
   	}

   	public function round(){
   		return $this->belongsToMany('App\Models\Round');
   	}

   	public function fixture(){
   		return $this->hasMany('App\Models\Fixture');
	}
	   
	public function squad(){
		return $this->hasMany(Squad::class);
	}

}
