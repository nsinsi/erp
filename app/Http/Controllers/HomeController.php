<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\Models\Requisition;
use App\Models\Item;
use App\Models\User;
use App\Models\Project;
use App\Models\Budgetline;
use App\Models\District;
use Illuminate\Http\Request;
class HomeController extends Controller
{
  public $userIds = array();
  public $psm;
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');

  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index(Request $request)
  {



        // $item=Item::orderBy('id','DESC')->paginate(5);




      $data = Requisition::all();
    $role = Auth::user()->role;
    // if(auth()->user()->role=='admin'){

      $this ->userIds[] =Auth::id();

      if(Auth::user()->districts()->count() > 1)
      {
        $districts;
        foreach (Auth::user()->districts()->get() as $key => $value) {
          $districts[] = $value->id;
        }

        foreach ($districts as $key => $value) {
          $users = District::find($value)->users;
          foreach ($users as $key => $value) {
            if(!in_array($value->id, $this->userIds) && !User::find($value->id)->hasAnyRole('Administrator','programsupportmanager','Accountant','senior manager','po','Stores Officer')){
              $this->userIds[] = $value->id;
            }
            if(User::find($value->id)->hasAnyRole('psm'))
            {
              $this->psm = $value->id;
            }

          }
        }
      }
      Session::put('userIds',$this->userIds);
      Session::put('program support manager');
      return view('layouts.home',compact('data'))
      ->with('i', ($request->input('page', 1) - 1) * 5);

      // $roles = Auth::user()->roles;
      // switch ($roles[0]->name) {
      //   case 'admin':
      //     return view('layouts.home');
      //     break;
      //   case 'accountant':
      //     return view ('layouts.home');
      //     break;
      //     case 'psm':
      //       return view ('layouts.home');
      //       break;
      //       case 'sm':
      //         $data = Requisition::orderBy('id','DESC')->paginate(5);
      //         return view ('layouts.home',compact('data'));
      //         break;
      //   default:
      //     return view('layouts.home');
      //     break;
      // }
  }
}
