<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function cv(){
        return view('cv');
    }

    public function contact(){
        return view('contact');
    }

    public function hireme(){
        return view('hireme');
    }

    public function allproject(){
        return view('projects');
    }
}