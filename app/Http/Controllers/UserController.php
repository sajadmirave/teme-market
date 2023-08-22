<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showSingUp()
    {
        return view("singup");
    }

    public function addUser()
    {
        return "Hello Fucki";
    }

    // 
    public function ShowLoginForm()
    {
        return view("login");
    }

    public function login()
    {
        return "Hello Fucki";
    }


}
