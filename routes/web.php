<?php
use Illuminate\Support\Facades\Route;
use App\Http\Contollers;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestHouseworkRequest;

Route::group(['middleware' => ['auth']], function(){
Route::get('home/edit','HouseworkController@create');
Route::get('home','HouseworkController@myhome');
Route::get('home/point','HouseworkController@point');
Route::get('home/calendar', 'HouseworkController@calendar');
Route::post('home/index', 'HouseworkController@store');
Route::get('home/index','HouseworkController@index');
Route::get('home/{housework}', 'HouseworkController@show');
Route::delete('/home/{housework}', 'HouseworkController@delete');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

 



