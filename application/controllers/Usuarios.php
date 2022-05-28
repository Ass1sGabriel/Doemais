<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		permissionAdm();
		$this->load->model("usuarios_model");
	}

	public function index()
	{
		$dados["usuarios"]  = $this->usuarios_model->index();
		$dados["title"] = "Usuarios - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/usuarios', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function edit($id)
	{
		$dados["usuario"]  = $this->usuarios_model->show($id);
		$dados["title"] = "Editar - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-usuarios', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($id)
	{
		$usuario = $_POST;
		$this->usuarios_model->update($id, $usuario);
		redirect("usuarios");
	}

	public function show($id)
	{
		return $this->db->get_where("usuarios", array(
			"id" => $id
		))->row_array();
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("usuarios");
		redirect("usuarios");
	}
}
