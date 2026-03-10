<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index(){

        return view('index');
    }
    function about(){

        return view('about',['page_title' => 'About Us']);
    }
    function contact(){
        return view('contact',['page_title' => 'Contact Us']);
    }
}
