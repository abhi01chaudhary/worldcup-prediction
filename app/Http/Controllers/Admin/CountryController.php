<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Round;
use App\Models\Country;
use App\Models\Nation;

class CountryController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
    }
	
	public function addCountry(){

        $groups = Group::pluck('group_name');

        $rounds = Round::pluck('round_name');
        
        $nations = Nation::pluck('name','name');

		return view('admin.country.create', compact('groups','rounds', 'nations'))->with('title','Add a Country');
    }
    
    public function index(){
        $countries = Country::all();
        return view('admin.country.index', compact('countries'))->with('title', 'All Countries');
    }

	public function store(Request $request){
		
		$this->validate($request,[
            'name'=>'required',
            'flag_image'=>'required',
            'group_id'=>'required',
            'round_id'=>'required'
        ]);

        $input = $request->all();

        $groupId = $request->group_id + 1;

        $roundId = $request->round_id + 1;

        $input['group_id'] = $groupId;

        $input['round_id'] = $roundId;

        $destinationPath = 'image/flags/';

        if ($request->file('flag_image')) {

            $image = str_random(6) . '_' . time() . '.' . $request->file('flag_image')->getClientOriginalName();

            $input['flag_image'] = $request->file('flag_image')->move($destinationPath, $image);

            $input['flag_image'] = str_replace('\\', '/', $input['flag_image']);

        }

        Country::create($input);

        session()->flash('message', 'Country Added. Please add players to it.');

        return redirect()->back();
    }    
    
    public function delete($id, Request $request){
        $country = Country::find($id);  
        $country->delete();
        session()->flash('message', 'Country Deleted!');
        return redirect()->back();
    }
}
