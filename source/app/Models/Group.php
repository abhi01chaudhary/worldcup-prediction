<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name','slug'];

    public function country(){
    	return $this->hasMany('App\Models\Country');
    }
}
