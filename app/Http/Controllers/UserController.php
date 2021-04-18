<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
//use App\Model\Member;



class UserController extends Controller
{
    public function index()
    {
      // $users = DB::select('select * from users');
      // return view('userdashboard', ['users'=>$users]);
         return view('login');
   

      
}
}
