<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    public function create(){
        return view('admin.settings.create')->with('title', 'Change Settings');
    }

    public function store(Request $request){
        $this->validate($request,[
            'app_name'=>'required',
            'app_logo'=>'required',
        ]);

        $input = $request->all();
        
        $destinationPath = 'image/flags/';

        if ($request->file('flag_image')) {

            $image = str_random(6) . '_' . time() . '.' . $request->file('flag_image')->getClientOriginalName();

            $input['flag_image'] = $request->file('flag_image')->move($destinationPath, $image);

            $input['flag_image'] = str_replace('\\', '/', $input['flag_image']);

        }

        Setting::create($input);

        session()->flash('message', 'Country Added. Please add players to it.');

        return redirect()->back();
    }
}
