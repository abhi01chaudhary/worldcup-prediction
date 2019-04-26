<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Fixture;
use App\Models\Country;
use App\Models\Group;
use App\Models\Round;

class FixtureController extends Controller
{
    public function fixtures($limit){

    	$fixtures = Fixture::orderby('id','ASC')->paginate($limit);

    	$fixtureList = [];

    	foreach($fixtures as $fixture){

    		$teamFirst = Country::where('id', $fixture->team_first_id)->first();

            $teamSecond = Country::where('id', $fixture->team_second_id)->first();

            $round = Round::where('id', $fixture->round_id)->first();

            $group = Group::where('id', $fixture->group_id)->first();

	        $fixtureList[] = [

	          'team_first' => $teamFirst->name,

	          'team_second' => $teamSecond->name,

	          'round' => $round->round_name,

	          'group' => $group->group_name,

	          'stadium_id' => $fixture->stadium_id,

	          'fixture_time' => date('Y-m-d', strtotime($fixture->fixture_time))

	        ];

      	}

	    return response()->json([
	        'status'=>true,
	        'fixtures'=>$fixtureList
	    ]);



    }
}
