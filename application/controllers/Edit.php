<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index($id = null)
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Edit Post";
		$data['akun'] = $this->session->userdata('user');

		$this->load->model('Artikel');
		$data['artikel'] = $this->Artikel->get_by_id($id);

		if (empty($data['artikel'])){
			return redirect('/');
		}

		$data['artikel'] = $data['artikel'][0];

		if ($data['artikel']->author_id != $data['akun']->id){
			return redirect('/');
		}

		$this->load->view('edit', $data);
	}

	public function post($id = null)
	{
		$this->load->helper('url');
		$this->session->set_flashdata('message', '');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

        $this->load->model('Artikel');
		$data['title'] = "Open Blog | Edit Post";
		$data['akun'] = $this->session->userdata('user');

		$data['artikel'] = $this->Artikel->get_by_id($id);

		if (empty($data['artikel'])){
			return redirect('/');
		}

		$data['artikel'] = $data['artikel'][0];

		if ($data['artikel']->author_id != $data['akun']->id){
			return redirect('/');
		}

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('cerita', 'Cerita', 'required');

		if ($this->form_validation->run() == false) {
			return $this->load->view('edit', $data);
		}

        $gambar_link = $this->input->post('gambar_link');
		$title = $this->input->post('title');
		$cerita = $this->input->post('cerita');

		if (empty($data['akun'])) {
			$this->session->set_flashdata('message', 'Akun tidak ditemukan');
			return $this->load->view('edit', $data);
		}

		$artikel = $this->Artikel->update($id, [
            'gambar_link' => $gambar_link,
			'title' => $title,
			'content' => $cerita,
            'author' => $data['akun']->id
		]);

		if (!$artikel) {
			$this->session->set_flashdata('message', 'Gagal mengubah artikel');
			return $this->load->view('edit', $data);
		}

		$data['artikel'] = $this->Artikel->get_by_id($id);
		$data['artikel'] = $data['artikel'][0];
        $this->session->set_flashdata('message', 'Berhasil mengubah artikel');
		$this->load->view('edit', $data);
	}

}

?>
