<?php

namespace App\Controllers\api;
use App\Models\ArticulosModel;
use CodeIgniter\RESTful\ResourceController;
use PHPUnit\Util\Json;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class ListaArticulos extends ResourceController
{
    use ResponseTrait;
    
    protected $format = 'json';

    public function __construct()
    {
        $this -> model = $this->setModel(new ArticulosModel());
    }
    
    public function index()
    {
        $articulos = $this->model->findAll();
        return $this->respond($articulos);
        //return $this->load->view('listaArticulos',$articulos);
        //return view('Plantilla/header').view('Vista',).view('Plantilla/footer');
    }

    public function show($id = null)
    {
        $articulos = $this->model->findAll();
        return $this->respond($articulos);
        //echo '<br>Metodo show' . $id;
    }

    
    public function new()
    {
        
    }

    
    public function create()
    {
        
    }

    
    public function edit($id = null)
    {
        
    }

    
    public function update($id = null)
    {
        
    }

    
    public function delete($id = null)
    {
        //
    }
}
