<tr class="row-keranjang">
	<td class="jenis_ayam">
		<?= $this->input->post('jenis_ayam') ?>
		<input type="hidden" name="jenis_ayam_hidden[]" value="<?= $this->input->post('jenis_ayam') ?>">
	</td>
	<td class="harga_barang">
		<?= $this->input->post('harga_barang') ?>
		<input type="hidden" name="harga_barang_hidden[]" value="<?= $this->input->post('harga_barang') ?>">
	</td>
	<td class="jumlah">
		<?= $this->input->post('jumlah') ?>
		<input type="hidden" name="jumlah_hidden[]" value="<?= $this->input->post('jumlah') ?>">
	</td>
	<td class="satuan">
		<?= strtoupper($this->input->post('satuan')) ?>
		<input type="hidden" name="satuan_hidden[]" value="<?= $this->input->post('satuan') ?>">
	</td>
	<td class="sub_total">
		<?= $this->input->post('sub_total') ?>
		<input type="hidden" name="sub_total_hidden[]" value="<?= $this->input->post('sub_total') ?>">
	</td>
	<td class="aksi">
		<button type="button" class="btn btn-danger btn-sm" id="tombol-hapus" data-nama-barang="<?= $this->input->post('jenis_ayam') ?>"><i class="fa fa-trash"></i></button>
	</td>
</tr>