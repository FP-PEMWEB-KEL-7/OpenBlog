<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Setting";
		$data['akun'] = $this->session->unset_userdata('user');

		$this->load->view('setting', $data);
	}

}

?>
