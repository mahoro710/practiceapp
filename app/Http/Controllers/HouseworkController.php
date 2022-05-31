<?php 

namespace App\Http\Controllers;

use App\FamilyUsers;
use App\Housework;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HouseworkRequest;


class HouseworkController extends Controller
{
    
  
  
   public function home()
   {
       return view("contents/home");
   }
  
   public function create(Housework $housework , FamilyUsers $user)
   {
      return view("contents/create")->with(['users'=> $user-> get()]);
   }
   
   public function point(FamilyUsers $user)
   {
      return view("contents/point")->with(['users' => $user-> get()]);
   }
   
  

   public function calendar()
   {
      return view('contents/calendar');
   }
   
   
  public function store(Request $request, Housework $housework)
{
    $input = $request['housework'];
    $housework->fill($input)->save();
    return redirect('/myhome/index'. $housework);
}
   
   public function index()
   {
      return view("contents/index");
   }
}