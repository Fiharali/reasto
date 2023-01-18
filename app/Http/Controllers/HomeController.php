<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Chefs;


class HomeController extends Controller
{
    //

    public function index(){

      $food=food::all();
      $chefs=chefs::all();
      return view('home',
      [
        'food'=>$food,
        'chefs'=>$chefs
    ]);


    }
    public function redirects(){
        $food=food::all();
        $chefs=chefs::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            session()->flash('message', ' Only access is allowed for the admins');
            return view('admin.admin');
        }else {

            return view('home',
      [
        'food'=>$food,
        'chefs'=>$chefs
    ]);
        }
    }
}
