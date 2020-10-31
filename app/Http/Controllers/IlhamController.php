<?php

namespace App\Http\Controllers;

class IlhamController extends Controller
{
    public function satu()
    {
        return view("ilham-1");
    }

    public function dua()
    {
        return view("ilham-2");
    }

    public function tiga()
    {
        return view("ilham-3");
    }
}
