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
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM consul INNER JOIN jadwal ON consul.id_jadwal = jadwal.id_jadwal INNER JOIN user ON jadwal.id_user=user.id_user INNER JOIN lahan ON user.id_lahan = lahan.id_lahan INNER JOIN sesi_tanam ON jadwal.id_sesi = sesi_tanam.id_sesi INNER JOIN jenis ON sesi_tanam.id_jenis = jenis.id_jenis WHERE consul.status='belum'");
				if(mysqli_num_rows($query)>0){
			
					while($data = mysqli_fetch_array($query)){
						$tanggal=$data["tanggal_consul"];
						$nama_kar=$data["nama"];
							$nama_lahan=$data["nama_lahan"];
							$jenis=$data["nama_jenis"];
							$des=$data["isi"];
							$status=$data["status"];
						
					}}
				?>	
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">	
					<img
						class="card-img-top"
						src="vendors/images/padi2.jpg"
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
									<input class="form-control" type="search" value = "<?php echo $tanggal ?>" name = "tanggal">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nama Petani</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="search" value = "<?php echo $nama_kar ?>" name = "nama_karyawan">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Lahan</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="search" value = "<?php echo $nama_lahan ?>" name = "nama_lahan">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Jenis Padi</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="search" value = "<?php echo $jenis ?>" name = "jenis">
							    </div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
								<div class="col-sm-12 col-md-10">
								<textarea class="form-control" value="" name = "deskripsi"><?php echo $des ?></textarea>
								</div>
								</div>
								
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Status</label>
								<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="status">
								<?php 
								$query1 = mysqli_query($koneksi,"SELECT * FROM consul");
								if(mysqli_num_rows($query)>0){ 
								?>
								<?php
									while($data1 = mysqli_fetch_array($query1)){
										$status=$data1["status"];
										
								?>		
									<option value="<?php echo $status ?>" <?php if($status==$data["status"]) echo "selected"?>><?php echo $status ?></option>
									<?php  
									} 
								} 
								?>
								</select>
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
