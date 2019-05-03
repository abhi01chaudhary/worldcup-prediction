<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function(){
    return env('TWITTER ');
});

use Illuminate\Http\Request;

Route::get('worldcup-predictor', 'Frontend\PredictionController@prediction');

Route::get('cricket-predictor', 'Frontend\PredictionController@cricketPrediction');

Route::post('fetch-details', 'Frontend\PredictionController@fetchDetails');

Route::post('/favourite-teams/{id}', 'Frontend\ProfileController@favTeams');

Route::get('/', function () {
    return view('welcome');
});

Route::get('clear',function (){
   \Illuminate\Support\Facades\Artisan::call('cache:clear');
   \Illuminate\Support\Facades\Artisan::call('config:cache');
    echo 'done';
});


Route::group(['namespace'=>'Frontend'], function(){

    Route::get('/redirect/{service}', 'SocialAuthController@redirect');

    Route::get('/callback/{service}', 'SocialAuthController@callback' );

    Route::get('get-profile/{id}','ProfileController@getProfile');

});

Route::group(['namespace'=>'Admin'], function (){

    Route::get('admin', 'DashboardController@getLogin');

    Route::get('login','DashboardController@getLogin');

    Route::post('admin', 'DashboardController@postLogin');

    Route::get('admin/logout', 'DashboardController@getLogout');

    Route::get('admin/dashboard','DashboardController@index');

    Route::post('admin/profile/update-password','DashboardController@updatePassword');
    
    Route::post('admin/profile/update-basic-information','DashboardController@updateBasicInformation');

    Route::get('admin/profile','DashboardController@getProfile');

    Route::get('admin/country/create','CountryController@addCountry');

    Route::get('admin/country', 'CountryController@index');
    
    Route::post('admin/country','CountryController@store');

    Route::get('admin/country/{id}/delete', 'CountryController@delete')->name('country.destroy');

    Route::get('admin/country/{id}/edit', 'CountryController@edit')->name('country.edit');

    Route::put('admin/country/{id}/update', 'CountryController@update')->name('country.update');

    Route::get('admin/squad/{id}/create', 'SquadController@create');

    Route::get('admin/squad/{id}/view', 'SquadController@view');

    Route::post('admin/squad', 'SquadController@store');

    Route::resource('admin/news','NewsController');

    Route::resource('admin/stadium','StadiumController');

    Route::resource('admin/fixture','FixtureController');

    Route::get('admin/overall-points', 'FixtureController@matchPoints');

});

Route::group(['namespace'=>'Api','prefix'=>'api'],function (){

    Route::post('auth/login-via-facebook','AuthController@loginViaFacebook');

    Route::post('auth/login-via-google','AuthController@loginViaGoogle');

    Route::post('auth/login-via-twitter','AuthController@loginViaTwitter');

    Route::get('config','SettingController@config');
    
    Route::get('news/{limit}','NewsController@newsFeed');

    Route::get('stadium','StadiumApiController@stadia');

    Route::get('prediction-details/{id}','ProfileController@getWinners');

    Route::get('get-fixtures/{limit}','FixtureController@fixtures');

    Route::get('profile','ProfileController@getProfile');
});
