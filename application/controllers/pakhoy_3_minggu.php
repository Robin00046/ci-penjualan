<?php

use Dompdf\Dompdf;

class pakhoy_3_minggu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'pakhoy_3_minggu';
		$this->load->model('M_peramalan', 'm_peramalan');
	}


	public function index()
	{
		$this->data['title'] = 'Data Peramalan';
        $this->data['penjualan'] = $this->m_peramalan->pakhoy_3_minggu();
        $this->data['no'] = 1;

		$this->load->view('peramalan/pakhoy_3_minggu', $this->data);

	}
}