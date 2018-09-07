<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Winner;

class PredictionController extends Controller
{
    public function prediction(){
    	
    	$groupAs = Country::where('group_id',1)
    						->where('round_id',1)->get();

    	$groupBs = Country::where('group_id',2)
    						->where('round_id',1)->get();

    	$groupCs = Country::where('group_id',3)
    						->where('round_id',1)->get();

    	$groupDs = Country::where('group_id',4)
    						->where('round_id',1)->get();
    											
    	$groupEs = Country::where('group_id',5)
    						->where('round_id',1)->get();

    	$groupFs = Country::where('group_id',6)
    						->where('round_id',1)->get();	

    	$groupGs = Country::where('group_id',7)
    						->where('round_id',1)->get();

    	$groupHs = Country::where('group_id',8)
    						->where('round_id',1)->get();
    	
    	return view('frontend.worldcup-predictor', compact('groupAs','groupBs','groupCs','groupDs','groupEs','groupFs','groupGs','groupHs'));
    }

    public function fetchDetails(Request $request){

        $data = $request->data;

        $userId = $request->data[0];

        $round16winners = $request->data[1];

        $quarterFinalWinners = $request->data[2];

        $semiFinalWinners = $request->data[3];

        $finalWinners = $request->data[4];

        $victoryCountry = $request->data[5];

        $countries = Country::all();

        $round1stWinners = [];

        $round2ndWinners = [];

        $round3rdWinners = [];

        $round4thWinners = [];

        $overallWinners = [];

        $winners = Winner::all();
        
        if( count($winners) == 0 ){

            foreach($round16winners as $round16){

                foreach($countries as $country){

                    if($round16 == $country->name){

                        $round1stWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            // $first_round_pair = array_chunk($round1stWinners, 2);

            // return $first_round_pair;

            // Winner::create([
            //     'user_id'=>$userId,
            //     'round'=>"1st",
            //     'teams'=>serialize($round1stWinners),
            //     'time_stamps'=>null
            // ]);

            // quarter final winners

            foreach($quarterFinalWinners as $quarterFinalWinner){

                foreach($countries as $country){

                    if($quarterFinalWinner == $country->name){

                        $round2ndWinners[] =[
                            $country->id
                        ];

                    }

                }

            }

            //semi-final winners

            foreach($semiFinalWinners as $semiFinalWinner){

                foreach($countries as $country){

                    if($semiFinalWinner == $country->name){

                        $round3rdWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            //final winners

            foreach($finalWinners as $finalWinner){

                foreach($countries as $country){

                    if( $finalWinner == $country->name ){

                        $round4thWinners[] =  [
                            $country->id
                        ];

                    }

                }

            }

            //winner 

            $winnerId = Country::where('name', $victoryCountry)->first();

            // $round1stWinners['round'] = '1st';

            // $round2ndWinners['round'] = '2nd';

            // $round3rdWinners['round'] = '3rd';

            // $round4thWinners['round'] = '4th';

            $overallWinners = [ $round1stWinners, $round2ndWinners, $round3rdWinners, $round4thWinners, 'user_id'=> $userId, 'winner'=> $winnerId->id];

            Winner::create([
                'user_id'=>$userId,
                'round'=>"1st, 2nd, 3rd, 4th & winner",
                'teams'=>serialize($overallWinners),
                'time_stamps'=>null
            ]);

            return $overallWinners;

        }


        $match = Winner::where('user_id', $userId)->first();

        if( !$match ){

            foreach($round16winners as $round16){

                foreach($countries as $country){

                    if($round16 == $country->name){

                        $round1stWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            // quarter final winners

            foreach($quarterFinalWinners as $quarterFinalWinner){

                foreach($countries as $country){

                    if($quarterFinalWinner == $country->name){

                        $round2ndWinners[] =[
                            $country->id
                        ];

                    }

                }

            }

            //semi-final winners

            foreach($semiFinalWinners as $semiFinalWinner){

                foreach($countries as $country){

                    if($semiFinalWinner == $country->name){

                        $round3rdWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            //final winners

            foreach($finalWinners as $finalWinner){

                foreach($countries as $country){

                    if($finalWinner == $country->name){

                        $round4thWinners[] =  [
                            $country->id
                        ];

                    }

                }

            }

            //winner 

            $winnerId = Country::where('name', $victoryCountry)->first();
            
            // $round1stWinners['round'] = '1st';

            // $round2ndWinners['round'] = '2nd';

            // $round3rdWinners['round'] = '3rd';

            // $round4thWinners['round'] = '4th';

            $overallWinners = [ $round1stWinners, $round2ndWinners, $round3rdWinners, $round4thWinners, 'user_id'=> $userId, 'winner'=> $winnerId->id];

            Winner::create([
                'user_id'=>$userId,
                'round'=>"1st, 2nd, 3rd, 4th & winner",
                'teams'=>serialize($overallWinners),
                'time_stamps'=>null
            ]);

            return $overallWinners;

        }else if($match->user_id == $userId){

            $winner = Winner::where('user_id', $userId)->first();

            foreach($round16winners as $round16){

                foreach($countries as $country){

                    if($round16 == $country->name){

                        $round1stWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            // quarter final winners

            foreach($quarterFinalWinners as $quarterFinalWinner){

                foreach($countries as $country){

                    if($quarterFinalWinner == $country->name){

                        $round2ndWinners[] =[
                            $country->id
                        ];

                    }

                }

            }

            //semi-final winners

            foreach($semiFinalWinners as $semiFinalWinner){

                foreach($countries as $country){

                    if($semiFinalWinner == $country->name){

                        $round3rdWinners[] = [
                            $country->id
                        ];

                    }

                }

            }

            //final winners

            foreach($finalWinners as $finalWinner){

                foreach($countries as $country){

                    if($finalWinner == $country->name){

                        $round4thWinners[] =  [
                            $country->id
                        ];

                    }

                }

            }
            

            $winnerId = Country::where('name', $victoryCountry)->first();


            // $round1stWinners['round'] = '1st';

            // $round2ndWinners['round'] = '2nd';

            // $round3rdWinners['round'] = '3rd';

            // $round4thWinners['round'] = '4th';

            $overallWinners = [ $round1stWinners, $round2ndWinners, $round3rdWinners, $round4thWinners, 'user_id'=> $userId, 'winner'=> $winnerId->id];

            $winner->update([
                'user_id'=>$userId,
                'round'=>"1st, 2nd, 3rd, 4th & winner",
                'teams'=>serialize($overallWinners),
                'time_stamps'=>null
            ]);


            return $overallWinners;

        }

        return 'success';

    }

}
