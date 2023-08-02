<?php $this->load->view('templates/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<?php echo anchor(
							site_url('transaksi/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Tambah Data',
							'class="btn btn-primary"'
						); ?>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Id Transaksi</th>
									<th>Id PT</th>
									<th>Id Customer</th>
									<th>Id Paket</th>
									<th>Tanggal Transaksi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_transaksi as $key => $row) { ?>
									<tr>
										<td><?php echo $row->id_transaksi; ?></td>
										<td><?php echo $row->id_pt; ?></td>
										<td><?php echo $row->id_customer; ?></td>
										<td><?php echo $row->id_paket; ?></td>
										<td><?php echo $row->tanggal_transaksi; ?></td>
										<td>
											<?php echo anchor(
												site_url('transaksi/edit/' . $row->id_transaksi),
												'<i class="fa fa-pencil"> </i>',
												'class="btn btn-warning"'
											); ?>
											<?php echo anchor(
												site_url('transaksi/delete/' . $row->id_transaksi),
												'<i class="fa fa-trash"> </i>',
												'class="btn btn-danger"'
											); ?>
										</td>

									</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>