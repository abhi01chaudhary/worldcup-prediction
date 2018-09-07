<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;

class SettingController extends Controller
{
    public function config(){

    	$version_name = "10000";

    	$version_code = '1';

    	$update = '<p>minor-update</p>';

  		$title = '<p>config-api</p>';

  		$link = '<a href="#">deeplinking</a>';

  		$status = 1;

  		$team_id = 1;

  		$team_name = 'Germany';

  		$team_flag = URL::to('/').'/'.'/image/flags/spain.png';

  		$timestamps = null;

  		return response()->json([

        'status'=>true,

        'version-details'=>[
            'version_name'=>$version_name,
            'version_code'=>$version_code,
            'updates'=>$update,
            'alert'=>[
              'title'=>$title,
              'link'=>$link,
              'active'=>$status
            ]
          ],
  			'modules'=>[

  				'home'=>[

  						'team'=>[

  								'team_id'=>$team_id,
  								'team_name'=>$team_name,
  								'team_flag'=>$team_flag,
  								'timestamps'=>$timestamps
  						]
  				]

  			]

  		]);
    }

   
}
