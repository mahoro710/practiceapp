<?php 

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    
  
   public function login()
   {
       return view("contents/login");
   }
   
   
   public function home()
   {
       return view("contents/home");
   }
  
   public function edit()
   {
      return view("contents/edit");
   }
   
   public function point(User $user)
   {
      return view("contents/point")->with(['users' => $user->get]);
   }

   public function calendar()
   {
      return view('contents/calendar');
   }
}

}

