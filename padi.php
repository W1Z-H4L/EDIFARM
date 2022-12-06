<?php 
include('koneksi.php');
$sukses="";
$error="";

if(isset($_POST['submit'])) {
	$nama_jenis = $_POST['nama_jenis'];
	$deskripsi = $_POST['deskripsi'];
	

	if($nama_jenis&&$deskripsi){
		$query =  "INSERT INTO jenis VALUES ('1', '$nama_jenis','$deskripsi')";
		$result = mysqli_query($koneksi,$query);
		if($result){
			$sukses ="Berhasil memasukkan data";
		}else{
			$error ="Gagal memasukkan data";
		}
	}else{

	}
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
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div class="right-sidebar">
		<?php include 'rightbar.php'; ?>
		</div>

		<?php include 'sidebar.php'; ?>
		<div class="mobile-menu-overlay"></div>

		<div class="mobile-menu-overlay"></div>
		<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Padi<h4>
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
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/ciherang.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Padi Ciherang</h5>
									<p class="card-text">Padi Ciherang merupakan varietas padi unggul turunan dari IR64. Bentuk gabah padi Ciherang adalah ramping panjang berwarna kuning bersih serta tekstur nasi yang pulen
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
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
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
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
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
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
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
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
									<h5 class="card-title weight-500">Padi</h5>
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
						Jenis Padi
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
									<label class="col-sm-12 col-md-2 col-form-label">Nama Padi</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text" placeholder="masukkan nama" name="nama_jenis">
									</div>
									</div>
								<div class="form-group">
									<label>Event Description</label>
									<textarea class="form-control" type="text" placeholder="masukkan deskripsi" name="deskripsi" onclick= ""></textarea>
								</div>
									<div class="form-group mb-0">
										<input
											type="submit"
											class="btn btn-primary"
											name="submit"
											value="Simpan"
											/>
									</div>
							</form>
							
													
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		
	</body>
</html>
