<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PagesControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['home']]);
    }

    public function home(){
        $title='HOME';
        return view('pages.home')->with('title',$title);
    }

    public function  dashboard(){
        return view('pages.dashboard');
    }


    public function product(){
        return view('pages.product');
    }

    public function stat()
    {
    return view('pages.stat');  
    }

    public function categories()
    {
    return view('pages.categories');  
    }

    public function Users(){
        return view('pages.Users');
    }

    
}
