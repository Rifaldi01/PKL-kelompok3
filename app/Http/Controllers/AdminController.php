<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function dashboard(){
        $team=Team::all();
        return view('admin.dashboard', compact('team'));
    }

    public  function team(){

        return view('admin.team');
    }

    public  function foto(){
        $foto = Gallery::all();
        $cat = Category::orderBy('category_name', 'asc')->get();
        return view('admin.foto-projek', compact(['cat', 'foto']));
    }


    public  function detail(){
        return view('admin.detail');
    }
}
