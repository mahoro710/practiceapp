<?php
use Illuminate\Support\Facades\Route;
use App\Http\Contollers;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestHouseworkRequest;

Route::group(['middleware' => ['auth']], function(){
Route::get('/myhome/edit','HouseworkController@create');
Route::get('/myhome','HouseworkController@home');
Route::get('/myhome/point','HouseworkController@point');
Route::get('/myhome/calendar','HouseworkController@calendar');
Route::post('/myhome/index', 'HouseworkController@store');
Route::get('/myhome/index','HouseworkController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

