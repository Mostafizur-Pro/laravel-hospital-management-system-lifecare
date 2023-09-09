<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shop(){
        return view('shop');
    }
    public function service(){
        return view('service');
    }
    public function doctors(){
        return view('doctors');
    }
    public function departments(){
        return view('departments');
    }
    public function about(){
        return view('about');
    }
}

