<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   	protected $fillable = ['title','slug','description','thumbnail','schedule_news','created_at','status'];

   	public function image(){
        return $this->hasOne(NewsImage::class);
    }

    public function scopePublished($query){
        return $query->where([ ['schedule_date','!=', null], ['schedule_date','<=',Carbon::now()] ])->orWhere('schedule_date', '=', null);
    }  
}
