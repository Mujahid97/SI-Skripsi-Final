<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NRP</th>
										<th>Nama</th>
										<th>Tanggal Sidang</th>
										<th>Waktu Mulai</th>
										<th>Waktu Selesai</th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($waktu_sidang as $waktu_sidang_1): ?>
									<tr>
										<td width="150">
											<?php echo $waktu_sidang_1->nrp ?>
										</td>
										<td>
											<?php echo $waktu_sidang_1->nama ?>
										</td>
										<td>
											<?php echo $waktu_sidang_1->tanggal_sidang ?>
										</td>
										<td>
                                            <?php echo $waktu_sidang_1->waktu_mulai ?>
										</td>

                                        <td>
                                            <?php echo $waktu_sidang_1->waktu_selesai ?>
                                        </td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->



		</div>
		<!-- /.content-wrapper -->
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
