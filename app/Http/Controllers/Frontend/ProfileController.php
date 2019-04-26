<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Country;

class ProfileController extends Controller
{
    
    public function getProfile($id){

    	$user = User::where('id',$id)->first();

    	$teams = Country::pluck('name','id');

    	return view('frontend.profile', compact('user','teams'));

    }

    public function favTeams(Request $request, $id){

    	$data = $request->data;	

    	$user = User::find($id);

    	$teams = serialize($request->data);

    	if( !$user->fav_teams ){

    		$user->update([ 

    			"fav_teams" => $teams

    		]);

    	}

    	return $user->fav_teams;

    }

}
