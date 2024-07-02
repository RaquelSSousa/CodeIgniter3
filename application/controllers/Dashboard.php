<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model("games_model");
		// vai receber tudo que vem da função index da model
		$data["games"] = $this->games_model->index();

		// var_dump($data["games"]);
		// die();

		// variável que vai guardar tudo que vai aparecer na página
		$data["title"] = "Dashboard - CodeIgniter (Raquel)";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);		
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
