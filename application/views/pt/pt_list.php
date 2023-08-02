<?php $this->load->view('templates/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<?php echo anchor(site_url('pt/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Tambah Data', 'class="btn btn-primary"'); ?>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Id PT</th>
									<th>Nama PT</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_pt as $key => $row) { ?>
								<tr>
									<td><?php echo $row->id_pt; ?></td>
									<td><?php echo $row->nama_pt; ?></td>
									<td><?php echo $row->password; ?></td>
									<td>
									<?php echo anchor(site_url('pt/edit/'.$row->id_pt),
										'<i class="fa fa-pencil"> </i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('pt/delete/'.$row->id_pt),
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