<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Konsultasi</title>
		<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo_edifarm.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div class="right-sidebar">
		<?php include 'rightbar.php'; ?>
		</div>

		<?php include 'sidebar.php'; ?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="title">
							<h4>Konsultasi</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">Dashboard</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Konsultasi
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="row clearfix">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">
					<img
						class="card-img-top"
						src="vendors/images/img2.jpg"
						alt="Card image cap"
					/>
					<div class="card-body">
						<h5 class="card-title weight-500">Lahan 1</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">
					<img
						class="card-img-top"
						src="vendors/images/img2.jpg"
						alt="Card image cap"
					/>
					<div class="card-body">
						<h5 class="card-title weight-500">Lahan 2</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">
					<img
						class="card-img-top"
						src="vendors/images/img2.jpg"
						alt="Card image cap"
					/>
					<div class="card-body">
						<h5 class="card-title weight-500">Lahan 3</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">
					<img
						class="card-img-top"
						src="vendors/images/img2.jpg"
						alt="Card image cap"
					/>
					<div class="card-body">
						<h5 class="card-title weight-500">Lahan 4</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
					</div>
				</div>
			</div>
		</div>
		<div
		class="modal fade bs-example-modal-lg"
		id="bd-example-modal-lg"
		tabindex="-1"
		role="dialog"
		aria-labelledby="myLargeModalLabel"
		aria-hidden="true"
	>
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">
					Konsultasi
				</h4>
				<button
					type="button"
					class="close"
					data-dismiss="modal"
					aria-hidden="true"
					alt="add-modal-kar"							
				>x
				</button>
				</div>
					<div class="modal-body">						
						<form>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Lahan</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Jenis Padi</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Identifikasi Awal</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Pertanyaan</label>
								</div>

								<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Hasil Pertanyaan</h4>
						</div>
						<div class="pb-20">
							<table class="data-table-export table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">No</th>
										<th>Pertanyaan</th>
									</tr>
								</thead>
								<tbody>
								<tr>
										<td class="table-plus">1</td>
										<td>wkwkwkwkwkwkwkwk</td>
								</tr>
								</tbody>
							</table>
							</div>
						</div>
						<form>
					<div class="modal-footer">
						<button
							type="button"
							class="btn btn-secondary"
							data-dismiss="modal"
							alt="add-modal-kar"
						>
						Close
						</button>
						<button type="button" class="btn btn-primary">
						Save changes
						</button>
					</div>
				</div>
			</div>
		</div>


		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
