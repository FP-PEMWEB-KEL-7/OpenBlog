<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model {
	public function get($by = null, $value = null, $logged_in = false)
	{
		if ($logged_in) {
			$this->db->select('id, email, name, password');
		} else {
			$this->db->select('id, email, name');
		}

		$this->db->from('akun');
		if ($by != null && $value != null) {
			$this->db->where($by, $value);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function add($data)
	{
		if (
			!is_array($data)
			|| empty($data)
			|| empty($data['email'])
			|| empty($data['password'])
		) {
			return false;
		}

		if (empty($data['gambar_link'])) {
			$data['gambar_link'] = 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg';
		}

		if (empty($data['name'])) {
			$data['name'] = substr(md5(rand()), 0, 10);
		}

		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
		return $this->db->insert('akun', $data);
	}

	public function update($id, $data)
	{
		if (
			!is_array($data)
			|| empty($data)
			|| empty($data['name'])
			|| empty($data['password'])
		) {
			return false;
		}

		if (empty($data['gambar_link'])) {
			$data['gambar_link'] = 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg';
		}

		if (empty($data['name'])) {
			$data['name'] = substr(md5(rand()), 0, 10);
		}

		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
		$this->db->where('id', $id);
		return $this->db->update('akun', $data);
	}
}
