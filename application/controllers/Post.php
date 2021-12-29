<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index($id = null)
	{
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

}

?>
