<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		if ($this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = 'Open Blog | Signup';

		$this->load->view('signup', $data);
	}

	public function post()
	{
		$this->load->helper('url');
		$this->session->set_flashdata('error', '');

		if ($this->session->userdata('logged_in')){
			return redirect('/');
		}

		$this->load->model('Akun');
		$data['title'] = 'Open Blog | Signup';

		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_message('min_length', 'Minimum of %s characters is %s');

		if ($this->form_validation->run() == false) {
			return $this->load->view('login', $data);
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$akun = $this->Akun->get('email', $email, true);

		if (!empty($akun)) {
			$this->session->set_flashdata('error', 'Email sudah terdaftar');
			return $this->load->view('signup', $data);
		}

		$akun = $this->Akun->add([
			'email' => $email,
			'password' => $password
		]);

		if (!$akun) {
			$this->session->set_flashdata('error', 'Internal error');
			return $this->load->view('signup', $data);
		}
		
		$akun = $this->Akun->get('email', $email, true);
		$this->session->set_userdata('logged_in', true);
		$this->session->set_userdata('user', $akun[0]);
		$this->session->set_userdata('password_raw', $password);
		return redirect('/home');
	}

}

?>
