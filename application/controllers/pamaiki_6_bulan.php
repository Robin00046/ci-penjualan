<?php

use Dompdf\Dompdf;

class pamaiki_6_bulan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'pamaiki_6_bulan';
		$this->load->model('M_peramalan', 'm_peramalan');
	}


	public function index()
	{
		$this->data['title'] = 'Data Peramalan';
        $this->data['penjualan'] = $this->m_peramalan->pamaiki_6_bulan();
        $this->data['no'] = 1;

		$this->load->view('peramalan/pamaiki_6_bulan', $this->data);

	}
}