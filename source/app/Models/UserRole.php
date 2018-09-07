<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = ['role_type','role_desc'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
