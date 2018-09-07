<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class AuthController extends Controller
{
    private $user;
    
    public function __construct(User $user){

        $this->user = $user;
    
    }

    public function loginViaFacebook(Request $request)
    {
        $content = $request->getContent();

        $content = json_decode($content);

        $auth = $content->auth_facebook;

        $accessToken = $content->access_token;

        $client = new \GuzzleHttp\Client();

        if ($auth == true) {

            try {

                 $res = $client->get('https://graph.facebook.com/me?fields=name,email,gender,picture&access_token=' . $accessToken);

                $facebookUser = json_decode($res->getBody());

                $name = $facebookUser->name;

                $email = $facebookUser->email;
                
            } catch (Exception $e) {
                
                return response()->json([
                    'message'=>'asdsas'
                ]);
            }

           

            if(!$email){

                return response()->json(['message' => 'Please make sure your email has been registered in facebook', 'status' => false]);

            }

            $user = User::where('email', $facebookUser->email)->first();

            if ($user) {
                $user->update([
                    'user_role_id' => 2,
                    'name' => $name,
                    'email' => $email,
                    'password' => '',
                    'login_type'=>'Facebook',
                    'login_type_id'=>$facebookUser->id
                ]);
            } else {
                $user = User::create([
                    'user_role_id' => 2,
                    'name' => $name,
                    'email' => $email,
                    'password' => '',
                    'login_type'=>'Facebook',
                    'login_type_id'=>$facebookUser->id
                ]);
            }

            if (!$token = JWTAuth::fromUser($user)) {

                return response()->json(['message' => 'invalid_credentials', 'status' => false]);

            } else {

                return response()->json([
                    'token' => $token,
                    'data' => [
                        'email' => $email,
                        'name' => $name,
                        'login_type'=>'Facebook',
                        'login_type_id'=>$facebookUser->id
                    ],
                    'status' => true
                ]);
            }

        } else {
            return response()->json([
                'message' => 'Unable to create token.',
                'status' => false
            ]);
        }
    }


    public function loginViaGoogle(Request $request)
    {
    //     $content = $request->getContent();

    //     $content = json_decode($content,true);
    //     return $content['auth_google'];

        $auth = $request->auth_google;

        $accessToken = $request->access_token;
   
        $client = new \GuzzleHttp\Client();

        if ($auth == true) {

            try {

                $res = $client->get('https://www.googleapis.com/plus/v1/people/me?access_token='.$accessToken);

                $googleUser = json_decode($res->getBody());

                $emailInfo =  json_decode(str_replace(array('[', ']'), '', htmlspecialchars(json_encode($googleUser->emails), ENT_NOQUOTES)));

                $email = $emailInfo->value;

                $name = $googleUser->displayName;
                
                $profile = $googleUser->image->url;        
                
            } catch (Exception $e) {
                
                return response()->json([

                    'success'=>false,
                    'message' => 'Token not valid'
                
                ]);
            }

           
            $user = User::where('email', $email)->first();

            if ($user) {

                $user->update([
                    'user_role_id' => 2,
                    'name' => $name,
                    'email' => $email,
                    'password' => '',
                    'profile_image'=>$profile,
                    'login_type'=>'google',
                    'login_type_id'=>$googleUser->id
                ]);

            } else {

                $user = User::create([
                    'user_role_id' => 2,
                    'name' => $name,
                    'email' => $email,
                    'password' => '',
                    'profile_image'=>$profile,
                    'login_type'=>'google',
                    'login_type_id'=>$googleUser->id
                ]);

            }

            if (!$token = JWTAuth::fromUser($user)) {

                return response()->json(['message' => 'invalid_credentials', 'status' => false]);

            } else {
                
                return response()->json([
                    'success' => true,
                    'bearer_token' => $token,
                    'data' => [
                        'email' => $email,
                        'name' => $name,
                        'profile_image'=>$user->profile_image,
                        'login_type'=>'google',
                        'login_type_id'=>$user->login_type_id
                    ]
                ]);
            }

        } else {
            return response()->json([

                'success' => false,
                'message' => 'Unable to create token.'
                
            ]);
        }
    }

    public function loginViaTwitter(Request $request)
    {

        $auth = $request->auth_twitter;

        $accessToken = $request->access_token;

        $tokenSecret = $request->access_token_secret;

        define("CONSUMER_KEY", "yWDGVaZwQ0UY1WpqE73fIK4gF");

        define("CONSUMER_SECRET", "f3jOQGM5qzkqbpXkuBTRoMVIYqt6ECWpCwQuZZNgNbmd3AdhmN");

        if ( $auth == true ) {

            try {

                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request->access_token, $request->access_token_secret);

                $twitterUser = $connection->get("account/verify_credentials", ['include_entities' => true, 'skip_status' => true, 'include_email' => true]);

                $userId = $twitterUser->id;

                $name = $twitterUser->name;

                $profile = $twitterUser->profile_image_url;
                 
              
            } catch ( Exception $e) {
                    
                return response()->json(['message'=>'Invalid token']);

            }

            $user = User::where('login_type_id', $userId)->first();

            if ($user) {

                $user->update([
                    'user_role_id' => 2,
                    'first_name' => $twitterUser->name,
                    // 'email' => $email,
                    'profile_image'=>$profile,
                    'password' => '',
                    'login_type'=>'twitter',
                    'login_type_id'=>$twitterUser->id
                ]);

            } else {

                $user = User::create([
                    'user_role_id' => 2,
                    'first_name' =>  $twitterUser->name,
                    // 'email' => $email,
                    'profile_image'=>$profile,
                    'password' => '',
                    'login_type'=>'google',
                    'login_type_id'=>$twitterUser->id
                ]);

            }

            if ( !$token = JWTAuth::fromUser($user)) {

                return response()->json(['message' => 'invalid_credentials', 'status' => false]);

            } else {
                
                return response()->json([
                    'status' => true,
                    'bearer_token' => $token,
                    'data' => [
                        'name' => $name,
                        'email' => $user->email,
                        'login_type'=>'twitter',
                        'profile_image'=>$user->profile_image,
                        'login_type_id'=>$user->login_type_id
                    ]
                ]);
            }
           
        } else {

            return response()->json([

                'message' => 'Unable to create token.',

                'status' => false

            ]);
        }
    }
}
