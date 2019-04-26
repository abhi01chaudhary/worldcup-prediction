<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>'index']);
        $this->middleware('guest',['only'=>'getLogin']);
    }

    public function index(){
        return view('admin.dashboard.index')->with('title','World cup');
    }

    public function getLogin(){
        return view('admin.dashboard.login')->with('title','World cup | Admin Login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]) && Auth::user()->user_role_id == 1){
            return redirect('admin/dashboard');
        }

        Auth::logout();
        return redirect('admin')
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'Invalid email/password'
            ]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect('admin')->with('title','Expense Tracker | Admin Login');
    }


    public function getProfile()
    {
        $user = Auth::user();

        return view('admin.dashboard.profile',compact('user'))->with('title','Expense Tracker | Profile');
    }

    public function updatePassword(Request $request)
    {
        if (!request()->ajax()) {
            return false;
        }

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|min:6|alpha_dash|confirmed',
            'password_confirmation' => 'required|min:6|alpha_dash'
        ]);

        if ($validator->fails()) {

            return response()->json(array(
                'status' => 'fails',
                'errors' => $validator->getMessageBag()->toArray()
            ));
        }
        if ($validator->passes()) {

            if (Hash::check($request->current_password, Auth::user()->password)) {


                Auth::user()->update([
                    'password' => bcrypt($request->password)
                ]);


                session()->flash('message', 'Password Successfully Changed.');

                return response()->json(array(
                    'status' => 'success',
                    'url' => url('admin/profile')
                ));

            } else {
                $validator->errors()->add('current_password',
                    'Your current password is incorrect, please try again.');
                return response()->json(array(
                    'status' => 'fails',
                    'errors' => $validator->getMessageBag()->toArray()
                ));
            }
        }
    }


    public function updateBasicInformation(Request $request){

        if (!request()->ajax()) {
            return false;
        }

        $validator = Validator::make($request->all(), [ 
            'first_name'=>'required',
            'last_name'=>'required',
            'mobile'=>'required',
        ]);

        if ($validator->fails()) {

            return response()->json(array(
                'status' => 'fails',
                'errors' => $validator->getMessageBag()->toArray()
            ));
        }
        if ($validator->passes()) {

            $inputs = $request->all();

            Auth::user()->update($inputs);

            session()->flash('basic_message', 'Basic Information Successfully Changed.');

            return response()->json(array(
                'status' => 'success',
                'url' => url('admin/profile')
            ));

        }
    }


}
