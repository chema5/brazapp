<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsers(){
		$this->db->select("u.*, r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r", "u.id_roles=r.id");
		$this->db->where("u.estado", 1);
		$resultados =$this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("usuarios", $data);
	}



}
