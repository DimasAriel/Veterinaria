<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinaria extends CI_Controller{

  public function __construct()
  {

  parent::__construct();
     //codeigniter : Write Less Do More
  $this->load->helper('url');
  $this->load->model('Animales_model');
  }

    function index()
    {

  //    redirect('usuario');

      $data = array();

      $id = (isset($_GET['id']))?$_GET['id']+0:0;

      $data['veterinaria'] = $this->Animales_model->cargarAnimal($id);

      $data['veterinarias'] = $this->Animales_model->listarAnimal();

      $this->load->view('veterinaria/principal',$data);

/*      Routes::get('user/{id}/image', function($id)){

        $user = User::find($id);
        $response = Response::make($user->image, 200);
        $response->header('Content-Type', 'image/jpeg');

      }
return $response;
*/    }

function guardar(){
  if($_POST){



    $this->Animales_model->guardarAnimal($_POST);
  }
   $this->load->view('veterinaria/mensaje');
}

function delete(){
  $id = (isset($_GET['id']))?$_GET['id']+0:0;
  $this->Animales_model->eliminarAnimal($id);
  $this->load->view('veterinaria/mensaje');
}

}
