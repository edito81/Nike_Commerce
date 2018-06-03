<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontUsersController extends Controller
{
    public function register()

    {


    	return view('register.register');
    }
    public function login()
    {

    	return view('register.login');
    	

    }
}
