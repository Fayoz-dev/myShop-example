<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function component(){

        $regions = ['Fargona','Toshkent','Bukhara','Navai'];

        return view('components', compact($regions));
    }
}
