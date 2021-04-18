<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
    	return view('index');
    }
}