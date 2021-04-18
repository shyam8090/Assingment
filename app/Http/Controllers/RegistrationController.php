<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function Registration()
    {
    	return view('registration');
    }

    public function Register(request $request)
    {
    	$name=$request->input('name');
    	$email=$request->input('email');
	    $mobile=$request->input('mobile');
	    $address=$request->input('address');
	    $city=$request->input('city');
	    $state=$request->input('state');
	    $country=$request->input('country');
	    $zip=$request->input('zip');
	    $pwd=$request->input('pwd');
	    DB::insert('insert into users(id,name,email,mobile,address,city,state,country,zip,pwd) values(?,?,?,?,?,?,?,?,?,?)', [null,$name,$email,$mobile,$address,$city,$state,$country,$zip,$pwd]);
       
        return redirect('login');
    }
}
