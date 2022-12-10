<?php 
require('koneksi.php');
session_start();
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['submit'])) {
	 $nama = $_POST['nama_jenis'];
	 $des = $_POST['deskripsi'];
	 $query =  "INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `deskripsi`) VALUES ('3','$nama','$des')";
	 $result = mysqli_query($koneksi,$query);
 }
 if(isset($_POST['update'])) {
	$id = '1';
	$nama = $_POST['nama_jenis'];
	 $des = $_POST['deskripsi'];
	
	$query =  "UPDATE `jenis` SET `id_jenis` = '$id', `nama_jenis` = '$nama', `deskripsi` = '$des'WHERE `user`.`id_jenis` = '$id';";
	$result = mysqli_query($koneksi,$query);
}
if(isset($_GET['op'])){
	$op=$_GET['op'];
}else{
	$op="";
}
if($op == 'delete'){
	$id = $_GET['id'];
	$query =  "DELETE FROM jenis WHERE id_jenis='$id'";
	$result = mysqli_query($koneksi,$query);
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Padi</title>
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
				<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Padi</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Dashboard</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Padi
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				<div class="title pb-20">
					</div>
					<div class="row clearfix">
						<?php 
						$query = "SELECT * FROM jenis";
						$result = mysqli_query($koneksi,$query);
						while($row= $row = mysqli_fetch_array($result)){
							$id=$row["id_jenis"];
						?>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box text-center">
								<div class=" d-flex justify-content-between pb-10">
									<img
										class="card-img-top"
										src="vendors/images/ciherang.jpg"
										alt=""
									/>
									<div class=" position-absolute">
										<a
											class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
											href="#"
											role="button"
											data-toggle="dropdown"
										>
											<i class="dw dw-more"></i>
										</a>
										<div
											class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
										>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"
												><i class="dw dw-edit2"></i> Edit</a
											>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
												</div>
											</div>
											</div>
													

											<a class="dropdown-item" href="#"
												><i class="dw dw-delete-3"></i> Delete</a
											>
										</div>
									</div>
									
								</div>
								<div class="card-body">
									<h5 class="card-title weight-500 text-left"><?php echo $row["nama_jenis"];?></h5>
									<p class="card-text text-left">Lihat Deskripsi Klik Detail dibawah!!!</p>
									<div>
										<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detail<?php echo $row["id_jenis"];?>" >Detail</a>
										<div
											class="modal fade"
											id="detail<?php echo $row["id_jenis"];?>"
											tabindex="-1"
											role="dialog"
											aria-labelledby="myLargeModalLabel"
											aria-hidden="true"
										>
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myLargeModalLabel">
														<?php echo $row["nama_jenis"];?>
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
														
														<p class="card-text text-left"><?php echo $row["deskripsi"];?></p>
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
					</div>
				</div>
			
			</div>
		</div>		
		<div class="add-modal-kar">
			<button 
			href="#"
			class="welcome-modal-btn"
			data-toggle="modal"
			data-target="#tambahpadi"
			>
			 +
		</button></div>
		
		<div
			class="modal fade bs-example-modal-lg"
			id="tambahpadi"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myLargeModalLabel"
			aria-hidden="true"
		>
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">
						Tambah Padi
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
							<form action="padi.php" method="POST">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" for="nama_jenis">Nama Jenis</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="nama" placeholder="Masukkan Data" name="nama_jenis">
									</div>
								</div>
								</div>
									<div class="form-group">
									<label class="col-sm-12 col-md-2 col-form-label" for="deskripsi">Deskripsi</label>
									<div class="col-sm-12 col-md-10">
									<textarea class="form-control" value="" type="deskripsi" placeholder="Masukkan Data" name ="deskripsi"></textarea>
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
