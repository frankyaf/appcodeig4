<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //return view('Vista');
        return view('Plantilla/header').view('Vista',).view('Plantilla/footer');
    }

    public function complete($id = null){
        $list['id'] = $id;
        return view('Plantilla/header').view('VistaCompleta',$list).view('Plantilla/footer');
    }
}
