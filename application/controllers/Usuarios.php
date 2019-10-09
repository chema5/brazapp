<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
	}
	
	public function index(){
		$data = array('usuarios' => $this->Usuarios_model->getUsers(), );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/usuarios", $data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/usuariosadd");
		$this->load->view("layouts/footer");
	}

	public function registrar(){
		$nombres = ucwords($this->input->post("nombres"));
		$papellido = ucwords($this->input->post("papellido"));
		$sapellido = ucwords($this->input->post("sapellido"));
		$dni = $this->input->post("dni");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$rpassword = $this->input->post("rpassword");
		$id_roles = $this->input->post("id_roles");

		$this->form_validation->set_rules("nombres", "nombres", "required|regex_match[/^[a-z ,.]*$/i]");
		$this->form_validation->set_rules("papellido", "1er apellido", "required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ ,.]*$/u]");
		$this->form_validation->set_rules("sapellido", "2do apellido", "alpha");
		$this->form_validation->set_rules("dni", "dni", "required|is_unique[usuarios.dni]");
		$this->form_validation->set_rules("email", "email", "required|is_unique[usuarios.email]|valid_email");
		$this->form_validation->set_rules("username", "usuario", "required|is_unique[usuarios.username]|min_length[4]");
		$this->form_validation->set_rules("password", "contraseña", "required|min_length[4]|matches[rpassword]");
		$this->form_validation->set_rules("rpassword", "confirmar contraseña", "required|min_length[4]");
		if ($this->form_validation->run()) {

			$titulo = "Bienvenido al sistema Venom";
			$mail = "Estimado/a <b>".$nombres."</b><br><br>!Enhorabuena¡ se ha creado una cuenta para usted en Venom, sistema de reserva de medios audiovisuales Infocal. <br><br>Para acceder ingrese al siguiente enlace: ".'http://' . $_SERVER['SERVER_ADDR'] . '/venom'."<br><br><b> Usuario: </b>".$username."<br><b>Contraseña: </b>".$password." <br><br>Le recomendamos familiarizarse con la seccion de ayuda, para hacer reservas sin ninguna complicacion.<br><br> Atentamente, <br> Soporte Informatico - Fundacion Infocal";

			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "From: < soportemedios@hotmail.com >\r\n";

			mail($email, $titulo, $mail, $headers);

			$data = array('nombres' => $nombres, 'papellido' => $papellido, 'sapellido' => $sapellido, 'email' => $email, 'dni' => $dni, 'username' => $username, 'password' => sha1($password), 'estado' => 1, 'id_roles' =>$id_roles);
			if ($this->Usuarios_model->save($data)) {
				redirect(base_url()."usuarios/users");
			}
		}else{
			$this->add();
		}	
	}



}

