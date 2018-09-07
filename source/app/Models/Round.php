<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = ['round_name','slug'];
    
    public function country(){
    	return $this->hasMany('App\Models\Country');
    }
}
