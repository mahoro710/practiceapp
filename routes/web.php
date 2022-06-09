<?php
use Illuminate\Support\Facades\Route;
use App\Http\Contollers;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestHouseworkRequest;

Route::group(['middleware' => ['auth']], function(){
Route::get('home/edit','HouseworkController@create');
Route::get('home','HouseworkController@myhome');
Route::get('home/point','HouseworkController@point');
Route::get('home/calendar','HouseworkController@calendar');
Route::post('home/index', 'HouseworkController@store');
Route::get('home/index','HouseworkController@index');
Route::get('home/houseworks/{housework}', 'HouseworkController@show');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
=======
Route::get('/', 'ContentController@login');
Route::get('/home','ContentController@home');
Route::get('/home/edit','ContentController@edit');
Route::get('/home/point','ContentController@point');
Route::get('/home/calendar','ContentController@calendar');



>>>>>>> e64f7ac633400f6d181b7db1a54526faa48b604a
