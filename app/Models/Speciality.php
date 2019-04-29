<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Squad;

class Speciality extends Model
{
    protected $guarded = [];

    public function squad(){
        return $this->belongsToMany(Squad::class,'speciality_squad')->withTimestamps();
    }
}
