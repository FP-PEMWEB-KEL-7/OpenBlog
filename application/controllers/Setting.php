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
		$data['akun'] = $this->session->userdata('user');
		$data['password_raw'] = $this->session->userdata('password_raw');

		$this->load->view('setting', $data);
	}

	public function post()
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Setting";
		$data['akun'] = $this->session->userdata('user');
		$data['password_raw'] = $this->session->userdata('password_raw');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			return $this->load->view('setting', $data);
		}

		$name = $this->input->post('name');
		$password = $this->input->post('password');

		$updated = $this->Akun->update($data['akun']->id, [
			'name' => $name,
			'password' => $password
		]);

		$this->load->view('setting', $data);
	}

}

?>
