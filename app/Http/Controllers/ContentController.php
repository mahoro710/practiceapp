<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
{
public function mypage()
    {
        return view('contents/mypage');  
    }

    public function login(Content $content)
    {
        return view('contents/login')->with('content');
}
  
  
}
