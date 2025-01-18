<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTamucontroller extends Controller
{
    //
    public function welcome() 
    {
        return view('welcomeToSignin');  
    }

    public function signin()
    {
        return view('signin');
    }

    public function selesai()
    {
        return view('selesai');
    }

    public function master()
    {
        return view('template.master');
    }

    public function index()
    {
        return view('index');
    }
}
