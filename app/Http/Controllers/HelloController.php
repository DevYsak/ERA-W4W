<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index(){
        return view('hello');
    }
    function about(){
        return view('about');
    }
}