<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
     // protected $fillable = ['team_first_id','team_second_id','group_id','round_id', 'stadium_id','fixture_time','status'];

     protected $guarded = [];

     public function country(){
     	return $this->belongsTo('App\Models\Country');
     }

     public function group(){
     	return $this->belongsTo('App\Models\Group');
     }

     public function round(){
     	return $this->belongsTo('App\Models\Round');
     }

     public function stadium(){
          return $this->belongsTo('App\Models\Stadium');
     }
     
}
