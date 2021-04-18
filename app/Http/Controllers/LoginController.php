<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function Login()
    {
    	return view('login');
    }


    public function Loged(request $request)
    {
    	
    	$email=$request->input('email');
    	$pwd=$request->input('pwd');
    	$data= DB::select('select id from users where email=? and pwd=?',[$email, $pwd]);
        if(count($data))
        {
            $users = DB::select('select * from users where email=?',[$email]);
            return view('userdashboard', ['users'=>$users]);
        	//return redirect('dashboard');
        }
        else
        {
        	echo "Enter Correct Data";
            return view('/login');
        }

    }
}