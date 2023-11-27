<?php

class M_peramalan extends CI_Model{
	protected $_table = 'penjualan';

	//tabel master
	public function tampil()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Bangkok Clasic%' AND `satuan` LIKE '%3 Minggu%' GROUP BY tgl_penjualan ;")->result();
	}

	public function bangkok_3_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Bangkok Clasic%' AND `satuan` LIKE '%3 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function bangkok_6_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Bangkok Clasic%' AND `satuan` LIKE '%6 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pakhoy_3_minggu()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pakhoy%' AND `satuan` LIKE '%3 minggu%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pakhoy_3_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pakhoy%' AND `satuan` LIKE '%3 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pakhoy_6_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pakhoy%' AND `satuan` LIKE '%6 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function samo_3_minggu()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Samo%' AND `satuan` LIKE '%3 minggu%' GROUP BY tgl_penjualan ;")->result();
	}

	public function samo_3_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Samo%' AND `satuan` LIKE '%3 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function samo_6_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Samo%' AND `satuan` LIKE '%6 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pamaiki_3_minggu()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pamaiki%' AND `satuan` LIKE '%3 minggu%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pamaiki_3_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pamaiki%' AND `satuan` LIKE '%3 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}

	public function pamaiki_6_bulan()
	{
		return $this->db->query("SELECT * ,CONCAT(YEAR(tgl_penjualan),'/',MONTH(tgl_penjualan)) as tgl_hitung, sum(jumlah_barang) as Sjumlah,
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW) AS prediksi, 
			Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW) AS prediksin, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 3 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mape, 
			ceil(((jumlah_barang - Avg(jumlah_barang) OVER(ORDER BY tgl_penjualan rows between 6 PRECEDING AND CURRENT ROW)) / jumlah_barang) * 100) as mapep 
			from penjualan INNER JOIN detail_penjualan on penjualan.no_penjualan=detail_penjualan.no_penjualan WHERE`jenis_ayam` LIKE '%Pamaiki%' AND `satuan` LIKE '%6 Bulan%' GROUP BY tgl_penjualan ;")->result();
	}
}