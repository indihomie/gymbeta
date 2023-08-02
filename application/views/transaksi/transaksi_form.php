<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID Transaksi</label>
		<input type="text" name="id_transaksi" class="form-control" value="<?php echo $id_transaksi;?>" placeholder="Masukkan Id Transaksi" required>
	</div>
	<div class="form-group">
		<label>ID PT</label>
		<select name="id_pt">
<?php
$this->db->select('id_pt');
$id_pt = $this->db->get('pt');

foreach($id_pt->result() as $row){
echo "<option value='".$row->id_pt."'>".$row->id_pt."</option>";
}
?></select>
	</div>
	<div class="form-group">
		<label>ID CUSTOMER</label>
		<select name="id_customer">
<?php
$this->db->select('id_customer');
$id_customer = $this->db->get('customer');

foreach($id_customer->result() as $row){
echo "<option value='".$row->id_customer."'>".$row->id_customer."</option>";
}
?></select>

	</div>
	<div class="form-group">
		<label>ID PAKET</label>
		<select name="id_paket">
<?php
$this->db->select('id_paket');
$id_paket = $this->db->get('paket');

foreach($id_paket->result() as $row){
echo "<option value='".$row->id_paket."'>".$row->id_paket."</option>";
}
?></select>
	</div>
	<div class="form-group">
		<label>TANGGAL TRANSAKSI</label>
		<input type="text" name="tanggal_transaksi" class="form-control" value="<?php echo $tanggal_transaksi;?>" placeholder="Masukkan Tanggal Transaksi" required>
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>