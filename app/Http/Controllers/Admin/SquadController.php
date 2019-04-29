<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speciality;
use App\Models\Squad;
use App\Models\Country;

class SquadController extends Controller
{

    public function __construct(){
		$this->middleware('auth');
    }

    public function create($id){
        $country = Country::find($id);
        $specialities = Speciality::pluck('title', 'id');
        return view('admin.squad.create', compact('country', 'specialities'))->with('title', 'Create Players in Squad');
    }

    public function store(Request $request){
    
		$this->validate($request,[
            'player_name'=>'required',
            'profile_image'=>'required',
            'age'=>'required',
            'speciality'=>'required'
        ]);

        $input = [];

        // $groupId = $request->group_id + 1;

        // $roundId = $request->round_id + 1;

        // $input['group_id'] = $groupId;

        // $input['round_id'] = $roundId;

        $destinationPath = 'image/player/profile';

        if ($request->file('profile_image')) {

            $image = str_random(6) . '_' . time() . '.' . $request->file('profile_image')->getClientOriginalName();

            $input['profile_image'] = $request->file('profile_image')->move($destinationPath, $image);

            $input['profile_image'] = str_replace('\\', '/', $input['profile_image']);

        }

        $input['country_id'] = $request->country_id;
        $input['player_name'] = $request->player_name;
        $input['age'] = $request->age;
        $input['brief_intro'] = $request->brief_intro;
        $input['news'] = $request->news;
        $squad = Squad::create($input);

        if($request->speciality){   
        
            $squad->speciality()->sync($request->speciality);
        
        }else{

            DB::table('speciality_squad')->where('speciality_id','=', $request->speciality->id)->delete();
        }

        $country = Country::find($request->country_id);

        session()->flash('message', 'Player Created for '. $country->name);

        return redirect()->back();
    }

    public function view($id){
        $players = Squad::where('country_id', $id)->latest()->get();
        $country = Country::find($id);
        return view('admin.squad.view', compact('players', 'country'))->with('title', 'Total Players');
    }
}
