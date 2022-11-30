<?php 
require('koneksi.php');
session_start();
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['submit'])) {
	 $nama = $_POST['nama'];
	 $luas = $_POST['luas'];
	 $des = $_POST['des'];
	 $tempat = $_POST['tempat'];
	 
	 // include database connection file
	//  include_once("koneksi.php");		
	 // Insert user data into table
	 $query =  "INSERT INTO `lahan` (`id_lahan`, `nama_lahan`, `luas`, `deskripsi`, `tempat`) VALUES ('$luas', '$nama','$luas','$des','$tempat')";
	 $result = mysqli_query($koneksi,$query);
        
	 // Show message when user added

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
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500"><?php echo $row["nama_lahan"];?></h5>
									<p class="card-text"><?php echo $row["deskripsi"];?></p>
									<div>
										<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Medium-modal" ><?php echo $row["nama_lahan"];?></a>
										<div
											class="modal fade"
											id="Medium-modal"
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
															Lorem ipsum dolor sit amet, consectetur adipisicing
															elit, sed do eiusmod tempor incididunt ut labore et
															dolore magna aliqua. Ut enim ad minim veniam, quis
															nostrud exercitation ullamco laboris nisi ut aliquip
															ex ea commodo consequat. Duis aute irure dolor in
															reprehenderit in voluptate velit esse cillum dolore eu
															fugiat nulla pariatur. Excepteur sint occaecat
															cupidatat non proident, sunt in culpa qui officia
															deserunt mollit anim id est laborum.
														</p>
													</div>
													<div class="modal-footer">
														<button
															type="button"
															class="btn btn-secondary"
															data-dismiss="modal"
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
									</div>
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
									<h5 class="card-title weight-500">Lahan</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					</div>
					<?php
						}?>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Lahan</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
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
			data-target="#bd-example-modal-lg"
			>
			 +
		</button></div>
		
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
						Large modal
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
										<input class="form-control" type="nama" placeholder="Lahan 1" name="nama">
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
										>Close
										</button>
										<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
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
