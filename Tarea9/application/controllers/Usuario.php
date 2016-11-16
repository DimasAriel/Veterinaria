<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {

  parent::__construct();
     //codeigniter : Write Less Do More
     $this->load->helper('url');
     $this->load->model('Usuario_model');
  }



    function index()
    {


      $data = array();

    //  $id = (isset($_GET['id']))?$_GET['id']+0:0;
         $id = 0;
         if(isset($_GET['id'])){
           $id = $_GET['id']+0;
         }


  $data['usuario'] =  $this->Usuario_model->cargarUsuario($id);
  $data['usuarios'] = $this->Usuario_model->listarUsuarios();


      $this->load->view('usuario/Principal',$data);

}
      function guardar(){
        if($_POST){
         $_POST['clave'] = md5($_POST['clave']);

          $this->Usuario_model->guardarUsuario($_POST);
        }
         $this->load->view('usuario/mensaje');
      }

      function delete(){
        $id = (isset($_GET['id']))?$_GET['id']+0:0;
        $this->Usuario_model->eliminarUsuario($id);
        $this->load->view('usuario/mensaje');
      }



    }
