<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Services\SocialFacebookAccountService;
use App\Models\User;
use App\Models\Country;
use Auth;

class SocialAuthController extends Controller
{
   	public function redirect($service) {

        return Socialite::with($service)->redirect();
    
    }

    public function callback($service){

        try {
           
            $user = Socialite::with($service)->user();

        } catch (Exception $e) {

            return Redirect::to('/');

        }

        // return response()->json([ 'data'=>$user]);

    	$authUser = $this->findOrCreateUser($user, $service);

        Auth::login($authUser, true);
    						
     	return redirect('worldcup-predictor');

    }

    public function findOrCreateUser($user, $service){

        $authUser = User::where('login_type_id', $user->id)->first();

        if ($authUser) {

            return $authUser;
        
        }
        
        return User::create([
            'first_name' => $user->name,
            'email' => $user->email,
            'password'=>bcrypt(str_random(6)),
            'login_type' => $service,
            'login_type_id' => $user->id,
            'user_role_id' => 2
        ]);

    }
}
