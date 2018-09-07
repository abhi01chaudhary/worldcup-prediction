<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Winner;
use JWTAuth;
use JWTAuthException;
use App\Models\User;

class ProfileController extends Controller
{	

    private $user;
    
    public function __construct(User $user){

        $this->user = $user;
    
    }

    public function getWinners($id){

    	$winner = Winner::where('user_id', $id)->first();

    	$teams = unserialize($winner->teams);

        $userId = $teams['user_id'];

        $winner = $teams['winner'];

        $firstRound = [];

        foreach($teams as $team){

            if(count($team) == 16){

                for($i = 0; $i < count($team); $i++){

                    $firstRound[] = $team[$i][0];

                }

            }

            if(count($team) == 8){
                for($i = 0; $i < count($team); $i++){

                    $secondRound[] = $team[$i][0];

                }
            }

            if(count($team) == 4){
                for($i = 0; $i < count($team); $i++){

                    $thirdRound[] = $team[$i][0];

                }
            }

            if(count($team) == 2){
                for($i = 0; $i < count($team); $i++){

                    $fourthRound[] = $team[$i][0];

                }
            }

        }

    	return response()->json([
            "success"=>true,
    		"teams"=>[
                  '1stRound' => $firstRound,
                  '2ndRound' => $secondRound,
                  '3rdRound' => $thirdRound,
                  '4thRound' => $fourthRound,
                  'winner' => $winner,
                  'user_id'=>$userId
            ]
    	
    	]);

    }

    public function getProfile(Request $request){

    	$user = JWTAuth::toUser($request->token);

        if($user){

            return response()->json([

                'success'=>true,

                'data'=>[
                    'name'=>$user->first_name,
                    'email'=>$user->login_type_id,
                    'profile'=>$user->profile_image,
                    'favourite_teams'=>$user->fav_team
                ] 

            ]);

        }else{

            return response()->json([
                'success'=>false,
                'message'=>"Token Invalid"
            ]);

        }
    }

    public function favTeams(){

        return $data;

    }
}
