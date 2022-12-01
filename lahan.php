<?php 
require('koneksi.php');
session_start();
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['submit'])) {
	 $nama = $_POST['nama'];
	 $luas = $_POST['luas'];
	 $des = $_POST['des'];
	 $tempat = $_POST['tempat'];
	 $query =  "INSERT INTO `lahan` (`id_lahan`, `nama_lahan`, `luas`, `deskripsi`, `tempat`) VALUES ('$luas', '$nama','$luas','$des','$tempat')";
	 $result = mysqli_query($koneksi,$query);
 }
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Lahan</title>
		<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo_edifarm.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
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
				<div class="title pb-20">
						<h2 class="h3 mb-0">Lahan</h2>
					</div>
					<div class="row clearfix">
						<?php 
						$query = "SELECT * FROM lahan";
						$result = mysqli_query($koneksi,$query);
						while($row= $row = mysqli_fetch_array($result)){
						?>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box text-center">
								<img
									class="card-img-top"
									src="vendors/images/sawah1.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500 text-left"><?php echo $row["nama_lahan"];?></h5>
									<p class="card-text text-left"><?php echo $row["deskripsi"];?></p>
									<div>
										<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detail<?php echo $row["id_lahan"];?>" >Detail</a>
										<div
											class="modal fade"
											id="detail<?php echo $row["id_lahan"];?>"
											tabindex="-1"
											role="dialog"
											aria-labelledby="myLargeModalLabel"
											aria-hidden="true"
										>
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myLargeModalLabel">
														<?php echo $row["nama_lahan"];?>
														</h4>
														<button
															type="button"
															class="close"
															data-dismiss="modal"
															aria-hidden="true"
														>
															×
														</button>
													</div>
													<div class="modal-body">
														<p>
															Lahan 1 menggunakan jenis padi ciherang, ditanam mulai dari tanggal 3 November 2022
														</p>
													</div>
													<div class="modal-footer">
														<button
															type="button"
															class="btn btn-secondary"
															data-dismiss="modal"
														>
															Batal
														</button>
														<button type="button" class="btn btn-primary">
															Simpan
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						}
						?>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/padi2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Lahan</h5>
									<p class="card-text">
										Lahan sudah dilakukan penanaman dan sudah memasuki bulan 1
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<div class="add-modal-kar">
			<button 
			href="#"
			class="welcome-modal-btn"
			data-toggle="modal"
			data-target="#tambahlahan"
			>
			 +
		</button></div>
		
		<div
			class="modal fade bs-example-modal-lg"
			id="tambahlahan"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myLargeModalLabel"
			aria-hidden="true"
		>
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">
						Tambah Lahan
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
							<form action="lahan.php" method="POST">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" for="nama">Nama Lahan</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="nama" placeholder="Lahan" name="nama">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" for="luas">Luas Lahan</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder="Search Here" type="luas" name="luas">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" for="des">Deskripsi</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder="Dataran tinggi" type="des" name="des">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" for="tempat">Tempat</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder="Jember" type="tempat" name="tempat">
									</div>
								</div>
								</div>
									<div class="modal-footer">
										<button
											type="button"
											class="btn btn-secondary"
											data-dismiss="modal"
											alt="add-modal-kar"
										>Batal
										</button>
										<input type="submit" name="submit" class="btn btn-primary" value="Simpan" id="sa-success">
									</div>
								</div>
							</form>
							
						</div>
					</div>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		
	</body>
</html>
