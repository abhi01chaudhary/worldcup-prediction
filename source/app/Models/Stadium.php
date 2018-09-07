<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = ['name','description','thumbnail','city','seating_capacity'];

    public function fixture(){
    	return $this->hasMany('App\Models\Fixture');
    }
}
