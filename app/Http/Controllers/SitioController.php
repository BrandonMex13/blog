<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function guardaContacto(Request $request)
    {
        // Guarda en la tabla
        DB::table('contactos')->insert([
            'correo' => $request->correo,
            'comentario' => $request->comentario,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back();
    }

    /*public function verMensajes()
    {
        //** Utilizando Query Builders */
        //$mensajes = DB::table('contactos')->get();

        //** Utilizando modelo */
        //$mensajes = Contacto::all();
        //return view('ver-mensajes', compact('mensajes'));
    //}

    public function verMensajes()
    {
        /** Utilizando Query Builder */
        // $mensajes = DB::table('contactos')->get();
        /** Utilizando Modelo */
        $mensajes = Contacto::where('correo', '!=', 'x@y.com')
            ->orWhere('correo', 'like', '%com')
            ->get();
        return view('ver-mensajes', compact('mensajes'));
    }
}
