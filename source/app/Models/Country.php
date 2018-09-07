<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   	protected $fillable = ['name','slug','flag_image','total_goals_count','total_matches_played','group_id','round_id','status'];

   	public function group(){
   		return $this->belongsToMany('App\Models\Group');
   	}

   	public function round(){
   		return $this->belongsToMany('App\Models\Round');
   	}

   	public function fixture(){
   		return $this->hasMany('App\Models\Fixture');
   	}

}
