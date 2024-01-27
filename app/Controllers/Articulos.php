<?php

namespace App\Controllers;

class Articulos extends BaseController{
    public function __construct()
    {
        helper('url');
    }
    public function index(){
        return view('Plantilla/header').view('listaArticulos').view('Plantilla/footer');
        //return view('listaArticulos');
    }

}