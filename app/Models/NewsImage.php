<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $fillable = [
      'news_id','thumbnail_image','medium_image','mediumLarge_image','full_image'
    ];

    public function news(){
        return $this->belongsTo(News::class);
    }
}
