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
        $articulos[$id] = $this->model->findAll();
        return $this->respond($articulos[$id]);
        //echo '<br>Metodo show' . $id;
    }

    
    public function new()
    {
        
    }

    
    public function create()
    {
        
        $model = new ArticulosModel();
        // Obtén los datos del cuerpo de la solicitud
        $data = $this->request->getJSON();

        // Inserta los datos en la base de datos
        $model->insert($data);
        
        // Envía una respuesta JSON
        return $this->respondCreated(['mensaje' => 'Registro insertado exitosamente']);

    }

    
    public function edit($id = null)
    {
        
    }

    public function update($id = null)
    {
         // Obtén los datos del cuerpo de la solicitud
        $data = $this->request->getJSON();
         // Validar y procesar los datos según tus necesidades
 
        // Ejemplo de actualización en la base de datos
        $model = new ArticulosModel();
        $model->update($id,$data);

        return $this->respondUpdated(['mensaje' => 'Registro actualizado exitosamente']);
    }

    
    public function delete($id = null)
    {
        $model = new ArticulosModel();
        $model ->delete($id);

        return $this->respondDeleted(['mensaje' => 'Registro borrado exitosamente']);
    }
}
