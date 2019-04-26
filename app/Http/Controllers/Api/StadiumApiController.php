<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stadium;
use URL;

class StadiumApiController extends Controller
{
    public function stadia(Request $request){

      dd('hello');

      $stadia = Stadium::orderBy('id', 'DESC')
           ->paginate($limit);;

      $stadiumList = [];

      foreach($stadia as $stadium){

        $url = URL::to('/').'/'.$stadium->thumbnail;

        $stadiumList[] = [

          'news_id' => $stadium->id,
          
          'news_title' => $stadium->title,

          'news_description' => $stadium->description,

          'thumbnail' => $url,

          'created_at' => date('Y-m-d', strtotime($stadium->created_at))

        ];

      }

      return response()->json([
        'status'=>true,
        'news'=>$stadiumList
      ]);

    }
}
