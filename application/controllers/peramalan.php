<?php

use Dompdf\Dompdf;

class peramalan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'peramalan';
		$this->load->model('M_peramalan', 'm_peramalan');
	}


	public function index()
	{
		$this->data['title'] = 'Data Peramalan';
        $this->data['penjualan'] = $this->m_peramalan->tampil();
        $this->data['no'] = 1;

		$this->load->view('peramalan/clasic_3_minggu', $this->data);

	}
}