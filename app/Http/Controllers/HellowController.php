<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HellowController extends Controller
{
    public function verification()
    {
        return view('home/about',['about'=>'This is Our about Page']);
    }
    public function validation()
    {
        return view('home/contact',['contact'=>'This is our contact page']);
    }
}
