<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stadium;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $stadia = Stadium::orderBy('created_at', 'Desc')->get();

        return view('admin.stadium.index', compact('stadia'))->with('title', 'World cup | All Stadia');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stadium.create')->with('title', 'World cup | Create New Stadium');
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
            'name' => 'required',
            'city' => 'required',
            'description' => 'required',
            'thumbnail' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2000',       
        ]);

        $input = $request->all();

        $destinationPath = 'image/stadium/';

        if ($request->file('thumbnail')) {

            $image = str_random(6) . '_' . time() . '.' . $request->file('thumbnail')->getClientOriginalName();

            $input['thumbnail'] = $request->file('thumbnail')->move($destinationPath, $image);

            $input['thumbnail'] = str_replace('\\', '/', $input['thumbnail']);

        }

        Stadium::create($input);

        session()->flash('message', 'Stadium Created');

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
        //
    }
}
