<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID PAKET</label>
		<input type="text" name="id_paket" class="form-control" value="<?php echo $id_paket;?>" placeholder="Masukkan Id Paket" required>
	</div>
	<div class="form-group">
		<label>NAMA PAKET</label>
		<input type="text" name="nama_paket" class="form-control" value="<?php echo $nama_paket;?>" placeholder="Masukkan Nama Paket" required>
	</div>
	<div class="form-group">
		<label>KETERANGAN PAKET</label>
		<input type="text" name="ket_paket" class="form-control" value="<?php echo $ket_paket;?>" placeholder="Masukkan Keterangan Paket" required>
	</div>
	<div class="form-group">
		<label>BIAYA</label>
		<input type="text" name="biaya" class="form-control" value="<?php echo $biaya;?>" placeholder="Masukkan Biaya" required>
	</div>
	<div class="form-group">
		<label>ID PT</label>
		<input type="text" name="id_pt" class="form-control" value="<?php echo $id_pt;?>" placeholder="Masukkan Id PT" required>
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('paket') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>