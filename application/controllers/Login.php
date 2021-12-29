<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		if ($this->session->userdata('logged_in')){
			return redirect('/');
		}
		
		$data['title'] = 'Open Blog | Login';

		$this->load->view('login', $data);
	}

	public function post()
	{
		$this->load->helper('url');
		$this->session->set_flashdata('error', '');

		if ($this->session->userdata('logged_in')){
			return redirect('/');
		}

		$this->load->model('Akun');
		$data['title'] = 'Open Blog | Login';

		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			return $this->load->view('login', $data);
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$akun = $this->Akun->get('email', $email, true);

		if (empty($akun)) {
			$this->session->set_flashdata('error', 'Email atau password salah');
			return $this->load->view('login', $data);
		}

		$akun = $akun[0];

		if ($email != $akun->email) {
			$this->session->set_flashdata('error', 'Internal error');
			return $this->load->view('login', $data);
		}

		if (password_verify($password, $akun->password)) {
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('user', $akun);
			$this->session->set_userdata('password_raw', $password);
			return redirect('/home');
		}

		$this->session->set_flashdata('error', 'Email atau password salah');
		return $this->load->view('login', $data);
	}

}

?>
