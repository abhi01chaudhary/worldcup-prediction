<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
     protected $fillable = ['user_id','round','teams','time_stamps'];

     public function user(){

     	return $this->hasMany('App\Models\User');

     }
}
