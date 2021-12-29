<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data['title'] = 'Open Blog | Signup';

		$this->load->view('signup', $data);
	}

	public function post()
	{
		
	}

}

?>
