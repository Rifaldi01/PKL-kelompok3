<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function Detail(){
        return view('home.detail');
    }

    public function Index(){
        return view('index');
    }
}
