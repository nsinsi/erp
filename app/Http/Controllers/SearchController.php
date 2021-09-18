<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Requisition;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
   public function search(Request $request) {


     $search_type= $_GET['query'];

      $search_text = $_GET['search'];
     if ( $search_type==="users") {

       $users=User::where('first_name','LIKE','%'.$search_text.'%')->paginate(10);
        return view('users.search',compact('users'));
     } else if ($search_type==="requisitions") {
       $requisitions=Requisition::where('amount','LIKE','%'.$search_text.'%')->paginate(10);
        return view('requisitions.search',compact('requisitions'));
     } else {
       return view("home");
     }
     }





}
