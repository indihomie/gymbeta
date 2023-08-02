<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID CUSTOMER</label>
		<input type="text" name="id_customer" class="form-control" value="<?php echo $id_customer;?>" placeholder="Masukkan Id Customer" required>
	</div>
	<div class="form-group">
		<label>NAMA CUSTOMER</label>
		<input type="text" name="nama_customer" class="form-control" value="<?php echo $nama_customer;?>" placeholder="Masukkan Nama Customer" required>
	</div>
	<div class="form-group">
		<label>PASSWORD</label>
		<input type="text" name="password" class="form-control" value="<?php echo $password;?>" placeholder="Masukkan Password" required>
	</div>
	<div class="form-group">
		<label>TANGGAL BERGABUNG</label>
		<input type="text" name="tanggal_bergabung" class="form-control" value="<?php echo $tanggal_bergabung;?>" placeholder="Masukkan Tanggal Bergabung" required>
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>