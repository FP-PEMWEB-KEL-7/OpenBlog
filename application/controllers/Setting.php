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
		$this->session->set_flashdata('error', '');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Setting";
		$data['akun'] = $this->session->userdata('user');
		$data['password_raw'] = $this->session->userdata('password_raw');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_message('min_length', 'Minimum of %s characters is %s');

		if ($this->form_validation->run() == false) {
			return $this->load->view('setting', $data);
		}

		$name = $this->input->post('name');
		$gambar_link = $this->input->post('gambar_link');
		$password = $this->input->post('password');

		$this->load->model('Akun');
		$updated = $this->Akun->update($data['akun']->id, [
			'name' => $name,
			'password' => $password,
			'gambar_link' => $gambar_link
		]);

		if (!$updated) {
			$this->session->set_flashdata('error', 'Gagal mengubah data');
			return $this->load->view('setting', $data);
		}

		$data['akun'] = $this->Akun->get('id', $data['akun']->id, true)[0];
		$data['password_raw'] = $password;
		$this->session->set_userdata('user', $data['akun']);
		$this->session->set_userdata('password_raw', $password);
		$this->load->view('setting', $data);
	}

}

?>
