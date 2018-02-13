<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Person;

class HelloController extends Controller
{
  public function index(Request $request)
  {
    $user = Auth::user();

    // this is clean

    //customer login page

    $items = DB::table('people')->simplePaginate(5);
    $param = ['items' => $items,'user'=>$user];
    //$items = DB::table('people')->simplePaginate(5);
    return view('hello.index',$param);
  }
}
