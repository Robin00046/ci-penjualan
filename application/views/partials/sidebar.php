<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">

		<div class="sidebar-brand-text mx-3">Agung Jaya Farm</div>
	</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Master
	</div>

	<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('barang') ?>">
			<i class="fas fa-fw fa-box"></i>
			<span>Data Ayam</span></a>
	</li>

	<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('kasir') ?>">
			<i class="fas fa-fw fa-cash-register"></i>
			<span>Master Kasir</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Transaksi
	</div>

	<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('penjualan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Transaksi Penjualan</span></a>
	</li>

	<div class="sidebar-heading">
		Peramalan
	</div>

	<li class="nav-item <?= $aktif == 'peramalan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('peramalan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Bangkok 3 Minggu</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'bangkok_3_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('bangkok_3_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Bangkok 3 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'bangkok_6_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('bangkok_6_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Bangkok 6 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pakhoy_3_minggu' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pakhoy_3_minggu') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pakhoy 3 Minggu</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pakhoy_3_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pakhoy_3_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pakhoy 3 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pakhoy_6_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pakhoy_6_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pakhoy 6 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'samo_3_minggu' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('samo_3_minggu') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Samo 3 Minggu</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'samo_3_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('samo_3_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Samo 3 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'samo_6_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('samo_6_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Samo 6 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pamaiki_3_minggu' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pamaiki_3_minggu') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pamaiki 3 Minggu</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pamaiki_3_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pamaiki_3_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pamaiki 3 Bulan</span></a>
	</li>
	<li class="nav-item <?= $aktif == 'pamaiki_6_bulan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pamaiki_6_bulan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Pamaiki 6 Bulan</span></a>
	</li>


	<hr class="sidebar-divider">
	<?php if ($this->session->login['role'] == 'admin') : ?>
		<!-- Heading -->
		<div class="sidebar-heading">
			Pengaturan
		</div>

		<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('pengguna') ?>">
				<i class="fas fa-fw fa-users"></i>
				<span>Manajemen Pengguna</span></a>
		</li>

		<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('toko') ?>">
				<i class="fas fa-fw fa-building"></i>
				<span>Profil Toko</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
	<?php endif; ?>

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>