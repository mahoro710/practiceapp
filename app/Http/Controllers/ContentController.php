<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Content;



class ContentController extends Controller
{
    public function login(Content $content)
    {
        return view('contents/login')->with('content');
}
}
