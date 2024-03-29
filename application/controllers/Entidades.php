<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Entidades extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		permissionAdm();
		$this->load->model("entidades_model");
	}

	public function index()
	{
		$dados["entidades"]  = $this->entidades_model->index();
		$dados["title"] = "Entidades - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_entidades', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function new()
	{
		$dados["title"] = "Nova Entidade - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/admin/view_form_entidades', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function store()
	{
		$this->load->model("entidades_model");
		$entidade = array(
			"nome" => $_POST["nome"],
			"email" => $_POST["email"],
			"cidade" => $_POST["cidade"],
			"descricao" => $_POST["descricao"],
			"cnpj" => $_POST["cnpj"],
			"status" => $_POST["status"]
		);

		$this->entidades_model->store($entidade);
		redirect("entidades");
	}

	public function edit($id)
	{
		$dados["entidade"]  = $this->entidades_model->show($id);
		$dados["title"] = "Editar - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/admin/view_form_entidades', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($id)
	{
		$entidade = $_POST;
		$this->entidades_model->update($id, $entidade);
		redirect("entidades");
	}

	public function show($id)
	{
		return $this->db->get_where("entidades", array(
			"id" => $id
		))->row_array();
	}

	public function altera_status_ativo($id)
	{
		$this->db->set('status', '1', false);
		$this->db->where("id", $id);
		$this->db->update("entidades");
		redirect("entidades");
	}

	public function altera_status_inativo($id)
	{
		$this->db->set('status', '2', false);
		$this->db->where("id", $id);
		$this->db->update("entidades");
		redirect("entidades");
	}
}
