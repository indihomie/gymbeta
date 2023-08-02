<?php $this->load->view('templates/header'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<?php echo anchor(site_url('paket/tambah'),
							'<i class="fa fa-plus-circle">
						</i> Tambah Data', 'class="btn btn-primary"'); ?>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Id Paket</th>
									<th>Nama Paket</th>
									<th>Keterangan Paket</th>
									<th>Biaya</th>
									<th>ID PT</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_paket as $key => $row) { ?>
								<tr>
									<td><?php echo $row->id_paket; ?></td>
									<td><?php echo $row->nama_paket; ?></td>
									<td><?php echo $row->ket_paket; ?></td>
									<td><?php echo $row->biaya; ?></td>
									<td><?php echo $row->id_pt; ?></td>
									<td>
										<?php echo anchor(site_url('paket/edit/'.$row->id_paket),
											'<i class="fa fa-pencil"> </i>',
											'class="btn btn-warning"'); ?>
										<?php echo anchor(site_url('paket/delete/'.$row->id_paket),
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