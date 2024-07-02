<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function index()
	{
		$this->load->model("games_model");
		// vai receber tudo que vem da função index da model
		$data["games"] = $this->games_model->index();

		// var_dump($data["games"]);
		// die();

		// variável que vai guardar tudo que vai aparecer na página
		$data["title"] = "Games - CodeIgniter (Raquel)";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);		
		$this->load->view('pages/games', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function add()
	{
		$data["title"] = "Games - CodeIgniter (Raquel)";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);		
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function store() 
	{
		$game = $_POST;
		$game["user_id"] = '1';
		$this->load->model("games_model");
		$this->games_model->store($game);
		redirect("dashboard");
	

	}
}
