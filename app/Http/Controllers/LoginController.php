<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
        $title = "login Page";
        return view('login' , compact('title'));
    }

    public function doLogin()
    {
        $remember = \request('remember_me') == 1 ? true : false ;
        if(auth()->guard('web')->attempt(['email'=>\request('email'),'password'=>\request('password')],$remember  ))
        {
            session()->flash('success' , 'Login Successfully');
            return redirect()->route('home');
        }
        else
        {
            session()->flash('error' , "fail to login");
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect()->route('login');
    }



}
