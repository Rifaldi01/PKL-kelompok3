<?php

namespace App\Http\Controllers;

use App\Category;
use App\CatTeam;
use App\Gallery;
use App\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function dashboard(){
        $team_cat = CatTeam::all();
        $team=Team::all();
        return view('admin.dashboard', compact(['team','team_cat']));
    }

    public  function team(){
        $team_cat = CatTeam::orderBy('cat_name', 'asc')->get();
        return view('admin.team', compact(['team_cat']));
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
