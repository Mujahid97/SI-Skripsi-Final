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
										<th>Tema Seminar</th>
										<th>Tanggal Seminar</th>
										<th>Waktu Mulai</th>
										<th>Waktu Selesai</th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($seminar as $seminar_mhs): ?>
									<tr>
										<td width="150">
											<?php echo $seminar_mhs->nrp_mhs ?>
										</td>
										<td>
											<?php echo $seminar_mhs->nama_mhs ?>
										</td>
										<td>
											<?php echo $seminar_mhs->tema_seminar ?>
										</td>
										<td>
                                            <?php echo $seminar_mhs->tanggal_seminar ?>
										</td>

                                        <td>
                                            <?php echo $seminar_mhs->waktu_mulai_seminar ?>
                                        </td>
										<td>
                                            <?php echo $seminar_mhs->waktu_selesai_seminar ?>
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
