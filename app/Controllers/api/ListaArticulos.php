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
        /*try{
            $articulo = $this->request->getJSON();
            if($this->model->insert($articulo)):
                $articulo->id = $this->model->insertID();
                return $this->respondCreated($articulo);
            else:
                return $this->failValidationError($this->model->validation->listErrors());
            endif;

        }catch(\Exception $e){
            return $this->failServerError('Ha ocurrido un error');
        }*/
        
            
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
        
    }

    
    public function delete($id = null)
    {
        //
    }
}
