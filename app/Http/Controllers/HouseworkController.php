<?php 

namespace App\Http\Controllers;

use App\FamilyUsers;
use App\Housework;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HouseworkRequest;


class HouseworkController extends Controller
{
    
  
  
   public function myhome()
   {
       return view("contents/myhome");
   }
  
   public function create(Housework $housework , FamilyUsers $user)
   {
      return view("contents/create")->with(['users'=> $user-> get()]);
   }
   
   public function point(FamilyUsers $user)
   {
      return view("contents/point")->with(['users' => $user-> get()]);
   }
   
  public function show(Housework $housework)
{
    return view('contents/show')->with(['housework' => $housework]);
}

   public function calendar()
   {
      return view('contents/calendar');
   }
   
   
  public function store(Request $request, Housework $housework)
{
    $input = $request['housework'];
    $housework->fill($input)->save();
    return redirect('/home/houseworks/'. $housework->housework_id);
}
   
   public function index(Housework $housework)
   {
      return view("contents/index")->with(['houseworks'=> $housework-> get()]);;
   }
}