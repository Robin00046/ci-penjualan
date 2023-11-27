<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('barang') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
						</div>
						<div class="float-right">
							<a href="<?= base_url('barang') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
								<div class="card-body">
									<form action="<?= base_url('barang/proses_tambah') ?>" id="form-tambah" method="POST">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="kode_ayam"><strong>Kode Ayam</strong></label>
												<input type="text" name="kode_ayam" placeholder="Masukkan Kode Ayam" autocomplete="off" class="form-control" required value="AYM<?= mt_rand(100000, 999999) ?>" maxlength="8" readonly>
											</div>
											<div class="form-group col-md-6">
												<label for="jenis_ayam"><strong>Jenis Ayam</strong></label>
												<select name="jenis_ayam" id="jenis_ayam" class="form-control" required>
													<option value="">-- Pilih Jenis Ayam --</option>
													<option value="Pakhoy">Pakhoy</option>
													<option value="Pamaiki">Pamaiki</option>
													<option value="Bangkok Clasic">Bangkok Clasic</option>
													<option value="Samo">Samo</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="harga_beli"><strong>Harga Beli</strong></label>
												<input type="number" name="harga_beli" placeholder="Masukkan Harga Beli" autocomplete="off" class="form-control" required>
											</div>
											<div class="form-group col-md-6">
												<label for="harga_jual"><strong>Harga Jual</strong></label>
												<input type="number" name="harga_jual" placeholder="Masukkan Harga Jual" autocomplete="off" class="form-control" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="jumlah"><strong>jumlah</strong></label>
												<input type="number" name="jumlah" placeholder="Masukkan jumlah" autocomplete="off" class="form-control" required>
											</div>
																						<div class="form-group col-md-6">
												<label for="satuan"><strong>Satuan</strong></label>
												<select name="satuan" id="satuan" class="form-control" required>
													<option value="">-- Silahkan Pilih --</option>
													<option value="3 Minggu">3 Minggu</option>
													<option value="3 Bulan">3 Bulan</option>
													<option value="6 Bulan">6 Bulan</option>
												</select>
											</div>
										</div>

										<hr>
										<div class="form-group">
											<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
											<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>

</html>