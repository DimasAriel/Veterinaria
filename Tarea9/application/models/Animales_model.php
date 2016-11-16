<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animales_model extends CI_Model{

public  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

function eliminarAnimal($id){

$this->db->where('id=',$id);
$this->db->delete('veterinaria');

}


  function guardarAnimal($veterinaria){
    $id = $veterinaria['id'];
    if($id+0 > 0){
      //Actualizar
      $this->db->where('id=',$id);
      unset($veterinaria['id']);
      $this->db->update('veterinaria',$veterinaria);
    }else {

      $this->db->insert('veterinaria',$veterinaria);
    }


  }

  function listarAnimal(){
    $query = $this->db->get('veterinaria');

    return $query->result();
  }

function cargarAnimal($id){

  $veterinaria = new stdClass();
  $veterinaria->id = 0;
  $veterinaria->nombre = "";
  $veterinaria->fecha_de_nacimiento = "";
  $veterinaria->tipo = "";
  $veterinaria->raza = "";
  $veterinaria->peso = "";
  $veterinaria->color = "";
  $veterinaria->foto = "";
  $veterinaria->comentario = "";

  $query = $this->db->where('id=',$id);
  $query = $this->db->get('veterinaria');

  $rs = $query->result();
  if(count($rs) > 0){
    $veterinaria = $rs[0];
}

   return $veterinaria;

}

}
