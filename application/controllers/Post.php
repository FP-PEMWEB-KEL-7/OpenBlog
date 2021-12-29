<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index($id = null)
	{
		if ($this->session->userdata('logged_in')){
			return $this->logged_in($id);
		}

		$this->load->helper('url');
		$this->load->model('Artikel');

		$data['artikel'] = $this->Artikel->get_by_id($id);

		if (empty($data['artikel'])){
			return redirect('/');
		}

		$data['artikel'] = $data['artikel'][0];

		$data['title'] = 'Open Blog | ' . $data['artikel']->title;

		$this->load->view('post', $data);
	}

	public function logged_in($id = null)
	{
		$this->load->helper('url'); 
		$this->load->model('Artikel');

		$data['artikel'] = $this->Artikel->get_by_id($id);

		if (empty($data['artikel'])){
			return redirect('/');
		}

		$data['artikel'] = $data['artikel'][0];

		$data['title'] = 'Open Blog | ' . $data['artikel']->title;
		$data['akun'] = $this->session->userdata('user');

		$this->load->view('post_logged_in', $data);
	}

}

?>
