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
		$data['artikels'] = $this->Artikel->get_limit(20, 'createdAt', 'desc');
		
		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 130);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home', $data);
	}

	public function search()
	{
		$this->load->helper('url'); 

		$data['title'] = 'Open Blog | Home Search';
		$data['artikels'] = [];
		$this->form_validation->set_rules('keyword', 'Keyword', 'required');

		if ($this->form_validation->run() == false) {
			return $this->load->view('home', $data);
		}

		$keyword = $this->input->post('keyword');

		if ($this->session->userdata('logged_in')){
			return $this->search_logged_in($keyword);
		}

		$this->load->model('Artikel');
		$data['artikels'] = $this->Artikel->search($keyword, 'createdAt', 'desc');
		
		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 130);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home', $data);
	}

	public function search_logged_in($keyword = null)
	{
		$this->load->helper('url'); 
		$this->load->model('Artikel');
		$data['title'] = 'Open Blog | Home Search';

		$data['akun'] = $this->session->userdata('user');
		$data['artikels'] = $this->Artikel->search_with_id($data['akun']->id, $keyword, 'createdAt', 'desc');

		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 130);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home_logged_in', $data);
	}

	public function logged_in()
	{
		$this->load->helper('url'); 
		$this->load->model('Artikel');
		$data['title'] = 'Open Blog | Home';
		$akun = $this->session->userdata('user');

		$data['artikels'] = $this->Artikel->get_by_author($akun->id, 'createdAt', 'desc');
		$data['akun'] = $this->session->userdata('user');

		for ($i=0; $i < count($data['artikels']); $i++) { 
			$data['artikels'][$i]->content = substr($data['artikels'][$i]->content, 0, 130);
			$data['artikels'][$i]->title = substr($data['artikels'][$i]->title, 0, 30);
			$data['artikels'][$i]->author_name = substr($data['artikels'][$i]->author_name, 0, 30);
		}

		$this->load->view('home_logged_in', $data);
	}

}

?>
