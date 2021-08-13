<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function dashboard(){
        return view('admin.dashboard');
    }

    public  function team(){
        return view('admin.team');
    }

    public  function foto(){
        return view('admin.foto-projek');
    }
}
