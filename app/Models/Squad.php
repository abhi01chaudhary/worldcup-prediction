<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Speciality;

class Squad extends Model
{
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function speciality(){
        return $this->belongsToMany(Speciality::class,'speciality_squad', 'speciality_id', 'squad_id')->withTimestamps();
    }
}
