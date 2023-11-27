<?php

class M_barang extends CI_Model{
	protected $_table = 'barang';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function jumlah(){
		$this->db->select_sum('jumlah');
		$query = $this->db->get('barang');
		return $query->row()->jumlah;
	}

	public function lihat_jumlah(){
		$query = $this->db->get_where($this->_table, 'jumlah > 1');
		return $query->result();
	}

	public function lihat_id($kode_ayam){
		$query = $this->db->get_where($this->_table, ['kode_ayam' => $kode_ayam]);
		return $query->row();
	}

	public function lihat_jenis_ayam($jenis_ayam){
		$query = $this->db->select('*');
		$query = $this->db->where(['jenis_ayam' => $jenis_ayam]);
		$query = $this->db->get($this->_table);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function min_jumlah($jumlah, $jenis_ayam){
		$query = $this->db->set('jumlah', 'jumlah-' . $jumlah, false);
		$query = $this->db->where('jenis_ayam', $jenis_ayam);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function ubah($data, $kode_ayam){
		$query = $this->db->set($data);
		$query = $this->db->where(['kode_ayam' => $kode_ayam]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($kode_ayam){
		return $this->db->delete($this->_table, ['kode_ayam' => $kode_ayam]);
	}
}