<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Category;
use App\Gallery;
use App\Team;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function Detail(){
        return view('detail');
    }

    public function Index(){
        $team = Team::all();
        $cat = Category::all();
        $foto = Gallery::all();
        $berita = Berita::all();
        return view('index', compact(['foto','cat', 'team', 'berita']));
    }

    public function News(){
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }



}


