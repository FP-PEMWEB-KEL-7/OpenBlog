<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$this->session->set_userdata('logged_in', false);
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('password_raw');

		return redirect('/login');
	}

}

?>
