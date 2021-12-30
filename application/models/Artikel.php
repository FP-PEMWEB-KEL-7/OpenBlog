<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {
	public function get_by_author($author = null, $sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$this->db->where('artikel.author', $author);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_by_id($id = null, $sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$this->db->where('artikel.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all($sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$query = $this->db->get();
		return $query->result();
	}

	public function get_limit($limit = null, $sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

	public function add($data = null)
	{
		if (
			!is_array($data)
			|| empty($data)
			|| empty($data['title'])
			|| empty($data['content'])
			|| empty($data['author'])
		) {
			return false;
		}

		if(empty($data['gambar_link'])) {
			$data['gambar_link'] = "https://dummyimage.com/900x400/ced4da/6c757d.jpg";
		}

		return $this->db->insert('artikel', $data);
	}

	public function remove($id = null)
	{
		$this->db->from('artikel');
		$this->db->where('id', $id);
		return $this->db->delete();
	}

	public function update($id = null, $data = null)
	{
		if (
			!is_array($data)
			|| empty($data)
			|| (empty($data['title']) && empty($data['content']))
			|| empty($id)
		) {
			return false;
		}

		$artikel = $this->get_by_id($id);
		if (empty($artikel)) {
			return false;
		}

		$data['title'] = empty($data['title']) ? $artikel[0]->title : $data['title'];
		$data['content'] = empty($data['content']) ? $artikel[0]->content : $data['content'];

		if(empty($data['gambar_link'])) {
			$data['gambar_link'] = "https://dummyimage.com/900x400/ced4da/6c757d.jpg";
		}

		$this->db->where('id', $id);
		return $this->db->update('artikel', $data);
	}

	public function search($keyword = null, $sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$this->db->like('title', $keyword);
		$query = $this->db->get();
		return $query->result();
	}

	public function search_with_id($id = null, $keyword = null, $sortby = null, $sort = null)
	{
		$this->db->select('artikel.id as id, artikel.title as title, artikel.content as content, artikel.author as author_id, artikel.createdAt as createdAt, akun.name as author_name, akun.email as author_email, artikel.gambar_link as poster, akun.gambar_link as author_photo');
		$this->db->join('akun', 'akun.id = artikel.author');
		$this->db->from('artikel');

		if ($sortby != null && $sort != null) {
			$this->db->order_by($sortby, $sort);
		}

		$this->db->like('title', $keyword);
		$this->db->where('author', $id);
		$query = $this->db->get();
		return $query->result();
	}
}
