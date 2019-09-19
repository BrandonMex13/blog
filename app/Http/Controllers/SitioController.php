<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function bienvenida()
    {
        return view('landing-page');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
