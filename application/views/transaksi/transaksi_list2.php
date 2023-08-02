<?php $this->load->view('templates/header2'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
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
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_transaksi2 as $key => $row) { ?>
								<tr>
									<td><?php echo $row->id_transaksi; ?></td>
									<td><?php echo $row->id_pt; ?></td>
									<td><?php echo $row->id_customer; ?></td>
									<td><?php echo $row->id_paket; ?></td>
									<td><?php echo $row->tanggal_transaksi; ?></td>
									
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