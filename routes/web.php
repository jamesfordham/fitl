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

/*Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/welcome', function () {
    return view('welcome');
});   */

Route::get('/', 'GradesController@index');

/*Route::get('about', function () {
        return view('pages/about');
});  */

Route::get('about', 'PageController@about');  //IS CALLING CONTROLLER INSTEAD OF ABOVE CODE
Route::get('grades/{grades}/edit', 'GradesController@edit'); //edit
Route::delete('grades/{grades}', 'GradesController@destroy'); //delete
Route::put('grades/{grades}', 'GradesController@update'); //Update object
Route::post('grades/store', 'GradesController@store'); //Open store function for grades/create page
Route::get('grades/create', 'GradesController@create'); //Create page
Route::get('grades/search', 'GradePlayerController@search'); //Search in header
Route::get('grades/{grades}', 'GradesController@show'); //curly braces tells url to look for paramete - e.g. ID=1
Route::get('grades', 'GradesController@index'); //Index page

//resource route -inc get, post, delete etc - registers auto URLs /xx
Route::resource('grades.players','GradePlayerController', ['only' => ['store','update','destroy']]);

//User Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Profile page
Route::get('profile', 'ProfileController@profile');

//Invoke Admin middleware /admin URL route group
Route::group( ['namespace'=> 'Admin', 'prefix'=>'admin', 'middleware'=>'admin'], function() {
    Route::resource('users','UserController');
});