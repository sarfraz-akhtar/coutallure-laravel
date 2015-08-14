<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('pages.landing',array());
});

Route::get('home', 'HomeController@index');


Route::post('BrandNameForm-Post',function(){
	$InputData= Input::all();
	$rules = array(
		'brandname'=> 'required|unique:brand_name',


	);
	$validator = Validator::make($InputData,$rules);
	if($validator->passes()){
		$BrandName = new App\Models\BrandName();
		$BrandName->brandname = $InputData['brandname'];
		$BrandName->save();
		return Redirect::to('/')->with('message', 'Success!');;
	}

	// Collect the validation error messages object.
	$errors = $validator->messages();
	return Redirect::to('/')->withErrors($validator);
});
// about us page
Route::get('aboutus', function()
{
	return View::make('pages.about',array());
});
Route::get('blog', function()
{
	return View::make('pages.about',array());
});
Route::get('forum', function()
{
	return View::make('pages.about',array());
});
Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest(URL::route('/auth/login'));
});

Route::get('user/{id}', 'User\UserController@showProfile');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::model('auth/register-email', 'NewsEmail');
Route::model('user', 'User');


Route::post('EmailForm-Post',function(){
	$InputData= Input::all();
	$rules = array(
		'email'=> 'required|email|unique:emailaddresses,email',


	);
	$validator = Validator::make($InputData,$rules);
	if($validator->passes()){
		$EmailAddress = new App\Models\EmailAddress();
		$EmailAddress->email = $InputData['email'];
		$EmailAddress->save();
		return Redirect::to('/')->with('message', 'Success!');;
	}

	// Collect the validation error messages object.
	$errors = $validator->messages();
	return Redirect::to('/')->withErrors($validator);
}

);
