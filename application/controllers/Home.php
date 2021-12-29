<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); 

		if ($this->session->userdata('logged_in')){
			return $this->logged_in();
		}

		$this->load->model('Artikel');
		$data['title'] = 'Open Blog | Home';
		$data['artikels'] = $this->Artikel->get_limit(3);
		
		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 200);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home', $data);
	}

	public function logged_in()
	{
		$this->load->helper('url'); 
		$this->load->model('Artikel');
		$data['title'] = 'Open Blog | Home';
		$akun = $this->session->userdata('user');

		$data['artikels'] = $this->Artikel->get_by_author($akun->id);

		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 200);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home_logged_in', $data);
	}

}

?>
