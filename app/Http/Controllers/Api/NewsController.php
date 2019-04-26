<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Carbon\Carbon;
use App\Models\News;

class NewsController extends Controller
{
    public function newsFeed($limit){

      $news = News::orderBy('id', 'DESC')
           ->paginate($limit);;

      $newsList = [];

      foreach($news as $new){

        $url = URL::to('/').'/'.$new->thumbnail;

        $newsList[] = [

          'news_id' => $new->id,
          
          'news_title' => $new->title,

          'news_description' => $new->description,

          'thumbnail' => $url,

          'created_at' => date('Y-m-d', strtotime($new->created_at))

        ];

      }

      return response()->json([
        'status'=>true,
        'news'=>$newsList
      ]);

    }
}
