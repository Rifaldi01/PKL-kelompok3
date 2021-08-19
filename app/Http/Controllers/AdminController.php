<?php

namespace App\Http\Controllers;

use App\Category;
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
        $cat = Category::orderBy('category_name', 'asc')->get();
        return view('admin.foto-projek', compact('cat'));
    }


    public  function detail(){
        return view('admin.detail');
    }
}
