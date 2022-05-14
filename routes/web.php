<?php
use Illuminate\Support\Facades\Route;


Route::get('/home','ContentController@mypage');
Route::get('/login', 'ContentController@login');

