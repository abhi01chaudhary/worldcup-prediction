<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Group;
use App\Models\Round;
use App\Models\Fixture;
use App\Models\Stadium;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
		$this->middleware('auth');
    }

    public function index()
    {
        $fixtures = Fixture::all();
        return view('admin.fixture.index',compact('fixtures'))->with('title','World cup | Fixtures');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Country::pluck('name','id');
        $rounds = Round::pluck('round_name','id');
        $groups = Group::pluck('group_name', 'id');

        $stadia = Stadium::pluck('name','id');

        return view('admin.fixture.create', compact('teams','rounds','groups','stadia'))->with('title','World cup | Fixture ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team_first_id' => 'required',
            'team_second_id' => 'required',
            'round_id' => 'required',
            // 'group_id' => 'required',
            'stadium_id' => 'required',
            'fixture_time' => 'required'       
        ],
        [
            'team_first_id.required'=>'Team first is required!',
            'team_second_id.required'=>'Team second is required!',
            'round_id.required'=>'Round field is required!',
            // 'group_id.required'=>'Group field is required!',
            'stadium_id.required'=>'Stadium field is required!',
            'fixture_time.required'=>'Fixture time is required!',
        ]);

        Fixture::create($request->all());

        session()->flash('message','Fixture Created');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function matchPoints(){
        $countries  = Country::all();
        // $rounds = Round::pluck('round_name');
        return view('admin.fixture.match-points', compact('countries'))->with('title', 'Overall Points Table');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!request()->ajax()) {
            return false;
        }

        $fixture = Fixture::find($id);
        
        if(!$fixture){
            abort(404);
        }

        $fixture->delete();

        session()->flash('message', 'Fixture Deleted.');

        return response()->json([
            'status' => 'success',
            'url' => url('admin/fixture')
        ]);

    }
}
