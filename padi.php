<?php 
include('koneksi.php');
$sukses="";
$error="";

if(isset($_POST['submit'])) {
	$jmlah = count($_POST);
	echo print_r($_POST);
	return;
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
		<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css"/>
		<script>
			function copyForm(){
				$("#asli")
				.clone()
				.appendTo($("#dinamis"))
			};
			function copyForm1(){
				$("#aslipupuk")
				.clone()
				.appendTo($("#dinamispupuk"))
			};
			function copyForm2(){
				$("#aslipestisida")
				.clone()
				.appendTo($("#dinamispestisida"))
			}
		</script>
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
					</div>
				</div>
			</div>
		</div>		
		<div class="add-modal-kar">
			<button 
			href="#"
			class="welcome-modal-btn"
			data-toggle="modal"
			data-target="#exampleModal"
			>
			 +
		</button></div>
		
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<form action="padi.php" method="POST">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Padi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<ul class="nav nav-tabs customtab" role="tablist">
							<li class="nav-item">
								<a
									class="nav-link active"
									data-toggle="tab"
									href="#detail"
									role="tab"
									>Detail padi</a
								>
							</li>
							<li class="nav-item">
								<a
									class="nav-link"
									data-toggle="tab"
									href="#irigasi"
									role="tab"
									>Irigasi</a
								>
							</li>
							<li class="nav-item">
								<a
									class="nav-link"
									data-toggle="tab"
									href="#pupuk"
									role="tab"
									>Pemupukan</a
								>
							</li>
							<li class="nav-item">
								<a
									class="nav-link"
									data-toggle="tab"
									href="#pestisida"
									role="tab"
									>Pestisida</a
								>
							</li>
						</ul>
						<div class="tab-content">
							<!-- Setting Tab start -->
							<div
								class="tab-pane fade show active"
								id="detail"
								role="tabpanel"
							>
								<div class="profile-setting">
									<ul class="profile-edit-list row">
										<li class="weight-100 col-md-12">
											<div class="form-group">
												<label>Nama Padi</label>
												<input class="form-control form-control-lg" type="text" name="namaPadi"/>
											</div>
											<div class="form-group">
												<label>Lama Tanam</label>
												<input class="form-control form-control-lg" type="text" name="durasi" />
											</div>
											<div class="form-group">
												<label>Deskripsi</label>
												<textarea class="form-control" name="des"></textarea>
											</div>
										</li>
									</ul>
								</div>
							</div>
								<div
									class="tab-pane fade height-100-p"
									id="irigasi"
									role="tabpanel"
								>
									<div class="profile-setting">
										<ul class="profile-edit-list row">
											<li class="weight-100 col-md-12">
												<div class="form-group" id="asli">
													<input id="demo2" type="text" value="0" name="demo2[]" />
												</div>

												<div class="form-group" id="dinamis">
												</div>
											</li>
										</ul>
										<div class="add-more-task">
											<a
												href="#"
												data-toggle="tooltip"
												data-placement="bottom"
												onclick="copyForm()"
												data-original-title="Add Task"
												><i class="ion-plus-circled"></i> Add
												More Task</a
											>
										</div>
									</div>
								</div>
								<div
									class="tab-pane fade height-100-p"
									id="pupuk"
									role="tabpanel"
								>
									<div class="profile-setting">
										<ul class="profile-edit-list row">
											<li class="weight-100 col-md-12">
												<div class="form-group" id="aslipupuk">
													<input class="form-control form-control-lg" type="text" name="hstpupuk[]" />
												</div>
												<div class="form-group" id="dinamispupuk">
													
												</div>
											</li>
										</ul>
										<div class="add-more-task">
											<a
												href="#"
												data-toggle="tooltip"
												data-placement="bottom"
												onclick="copyForm1()"
												data-original-title="Add Task"
												><i class="ion-plus-circled"></i> Add
												More Task</a
											>
										</div>
									</div>
								</div>
								<div
									class="tab-pane fade height-100-p"
									id="pestisida"
									role="tabpanel"
								>
									<div class="profile-setting">
										<ul class="profile-edit-list row">
											<li class="weight-100 col-md-12">
												<div class="form-group" id="aslipestisida">
													<input class="form-control form-control-lg" type="text" name="hstpestisida[]" />
												</div>
												<div class="form-group" id="dinamispestisida">
												</div>
											</li>
										</ul>
										<div class="add-more-task">
											<a
												href="#"
												data-toggle="tooltip"
												data-placement="bottom"
												onclick="copyForm2()"
												data-original-title="Add Task"
												><i class="ion-plus-circled"></i> Add
												More Task</a
											>
										</div>
									</div>
								</div>
							<!-- Setting Tab End -->
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>
				
							
													
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="vendors/scripts/advanced-components.js"></script>
		
	</body>
</html>
