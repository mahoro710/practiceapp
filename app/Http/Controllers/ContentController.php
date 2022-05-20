<?php 

namespace App\Http\Controllers;

use App\Content;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    
  
   public function login()
   {
       return view("contents/login");
   }
   
   
   public function mypage()
   {
       return view("contents/mypage");
   }
  
    

}