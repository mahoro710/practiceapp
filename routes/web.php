<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'ContentController@login');
Route::get('/home','ContentController@mypage');