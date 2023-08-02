<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID PT</label>
		<input type="text" name="id_pt" class="form-control" value="<?php echo $id_pt;?>" placeholder="Masukkan Id PT" required>
	</div>
	<div class="form-group">
		<label>NAMA PT</label>
		<input type="text" name="nama_pt" class="form-control" value="<?php echo $nama_pt;?>" placeholder="Masukkan Nama PT" required>
	</div>
	<div class="form-group">
		<label>PASSWORD</label>
		<input type="text" name="password" class="form-control" value="<?php echo $password;?>" placeholder="Masukkan Password" required>
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('pt') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>