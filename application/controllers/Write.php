<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Write extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Write";
		$data['akun'] = $this->session->userdata('user');

		$this->load->view('write', $data);
	}

	public function post()
	{
		$this->load->helper('url');
		$this->session->set_flashdata('error', '');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

        $this->load->model('Artikel');
		$data['title'] = "Open Blog | Write";
		$data['akun'] = $this->session->userdata('user');

        $this->form_validation->set_rules('gambar_link', 'Gambar_Link', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('cerita', 'Cerita', 'required');

		if ($this->form_validation->run() == false) {
			return $this->load->view('write', $data);
		}

        $gambar_link = $this->input->post('gambar_link');
		$title = $this->input->post('title');
		$cerita = $this->input->post('cerita');

		if (empty($data['akun'])) {
			$this->session->set_flashdata('error', 'Akun tidak ditemukan');
			return $this->load->view('write', $data);
		}

		$artikel = $this->Artikel->add([
            'gambar_link' => $gambar_link,
			'title' => $title,
			'content' => $cerita,
            'author' => $data['akun']->id
		]);

		if (!$artikel) {
			$this->session->set_flashdata('error', 'Gagal menyimpan data');
			return $this->load->view('write', $data);
		}
        redirect('/');
	}

}

?>