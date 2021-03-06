<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("entidades_model");
		$this->load->model("entidades_doacao_model");
		$this->load->model("usuarios_model");
	}

	public function index()
	{
		$dados["entidades"]  = $this->entidades_model->dashboard_index();
		$dados["usuarios"]  = $this->usuarios_model->dashboard_index();
		$dados["doacoes"]  = $this->entidades_doacao_model->dashboard_index();
		$dados["title"] = "Dashboard - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_dashboard2', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}
