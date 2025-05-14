<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function master_data()
    {
        return view('master_data');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
