<?php $this->load->view('templates/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<?php echo anchor(site_url('customer/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Tambah Data', 'class="btn btn-primary"'); ?>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Id Customer</th>
									<th>Nama Customer</th>
									<th>Password</th>
									<th>Tanggal Bergabung</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_customer as $key => $row) { ?>
								<tr>
									<td><?php echo $row->id_customer; ?></td>
									<td><?php echo $row->nama_customer; ?></td>
									<td><?php echo $row->password; ?></td>
									<td><?php echo $row->tanggal_bergabung; ?></td>
									<td>
										<?php echo anchor(site_url('customer/edit/'.$row->id_customer),
											'<i class="fa fa-pencil"> </i>',
											'class="btn btn-warning"'); ?>
										<?php echo anchor(site_url('customer/delete/'.$row->id_customer),
											'<i class="fa fa-trash"> </i>',
											'class="btn btn-danger"'); ?>
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
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>