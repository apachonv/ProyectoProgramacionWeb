<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function registroEsteticista(){
        return view('registroEsteticista');
    }
    public function registroUsuario(){
        return view('registroUsuario');
    }
    public function iniciarSesion(){
        return view('iniciarSesion');
    }
}
