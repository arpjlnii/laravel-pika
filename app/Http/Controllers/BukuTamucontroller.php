<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTamucontroller extends Controller
{
    //
    public function welcomeToSignin() 
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
}
