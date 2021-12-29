<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function index($id = null)
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

		$data['title'] = "Open Blog | Delete Post";
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

		$this->load->view('delete', $data);
	}

	public function proceed($id = null)
	{
		$this->load->helper('url');

		if (!$this->session->userdata('logged_in')){
			return redirect('/');
		}

        $this->load->model('Artikel');
		$data['title'] = "Open Blog | Delete Post";
		$data['akun'] = $this->session->userdata('user');

		$data['artikel'] = $this->Artikel->get_by_id($id);

		if (empty($data['artikel'])){
			return redirect('/');
		}

		$data['artikel'] = $data['artikel'][0];

		if ($data['artikel']->author_id != $data['akun']->id){
			return redirect('/');
		}

		$this->Artikel->remove($id);
		redirect('/');
	}

}

?>
