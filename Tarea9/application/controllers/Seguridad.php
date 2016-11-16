<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller{

  public function __construct()
  {
  //   define('NOLOGIN',true);
  parent::__construct();
         $this->load->model('Usuario_model');

     //codeigniter : Write Less Do More
  }

    function index()
    {
             $this->load->view('usuario/login') ;
    }

   function salir(){
     session_destroy();
     redirect('Seguridad');
   }


   function login()
   {
       $usuario = $_POST['usuario'];
       $clave = $_POST['clave'];
       $tmp =  $this->Usuario_model->iniciarSesion($usuario, $clave);
       if($tmp !== false)
        {
         $_SESSION['usuario'] = $tmp;
         redirect('Mascotas');
        }
           else
        {
         $this->load->view('usuario/error');
        }

    }
  }
