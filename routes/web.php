<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'ContentController@login');
Route::get('/home','ContentController@home');
Route::get('/home/edit','ContentController@edit');
Route::get('/home/point','ContentController@point');
Route::get('/home/calendar','ContentController@calendar');



