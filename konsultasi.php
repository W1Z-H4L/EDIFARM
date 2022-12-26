<?php
include('koneksi.php');
if(isset($_POST['update'])) {
	$id = $_POST ['id'];
	$status = $_POST['status'];
	
	
	$query =  "UPDATE `consul` SET `status` = '$status' where `consul`.`id_consul` = '$id'";
	$result = mysqli_query($koneksi,$query);
}
?>


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
					$query = "SELECT * FROM consul INNER JOIN jadwal ON consul.id_jadwal = jadwal.id_jadwal INNER JOIN user ON jadwal.id_user=user.id_user INNER JOIN lahan ON user.id_lahan = lahan.id_lahan INNER JOIN jenis ON user.id_jenis = jenis.id_jenis WHERE consul.status='belum'";
					$result = mysqli_query($koneksi,$query);
					while($row = mysqli_fetch_array($result)){
						$id=$row["id_consul"];
					?>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box text-center">
							<div class=" d-flex justify-content-between pb-10">
								<img class="card-img-top" src="vendors/images/gambarlahan_2.png" alt=""/>
								
							</div>
							<div class="card-body">
								<h5 class="card-title weight-500 text-left"><?php echo $row["nama_lahan"];;?></h5>
								<p class="card-text text-left">Tekan tombol detail untuk melihat konsultasi berikut.</p>
								<div>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detail<?php echo $id;?>" >Detail</a>
									<div
										class="modal fade"
										id="detail<?php echo $id;?>"
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
													<form action="konsultasi.php" method="POST">
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">ID</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="search" value = "<?php echo $row["id_consul"]; ?>" name = "id">
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="search" value = "<?php echo $row["tanggal_consul"]; ?>" name = "tanggal">
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Nama Petani</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="search" value = "<?php echo $row["nama"]; ?>" name = "nama_karyawan">
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Lahan</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="search" value = "<?php echo $row["nama_lahan"]; ?>" name = "nama_lahan">
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Jenis</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="search" value = "<?php echo $row["nama_jenis"]; ?>" name = "nama_jenis">
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
															<div class="col-sm-12 col-md-10">
															<textarea class="form-control" value="" name = "deskripsi"><?php echo $row["isi"]; ?></textarea>
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Foto</label>
															<div><img name = "foto" value = "" src ="images/<?php echo $row["Foto"];?>" width : 100% height : 150%;>
																
															</div>
														</div><div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Status</label>
															<div class="col-sm-12 col-md-10">
															<select class="custom-select col-12" name="status">
															<?php 
															$query1 = mysqli_query($koneksi,"SELECT status FROM consul where id_consul=$id");
															if(mysqli_num_rows($query1)>0){ 
															
																while($data1 = mysqli_fetch_array($query1)){
																	$status=$data1["status"];
																	
															?>		
																<option value="Belum" <?php if($status=='belum') echo "selected"?>>Belum</option>
																<option value="Selesai" <?php if($status=='selesai') echo "selected"?>>Selesai</option>
																<?php  
																} 
															} 
															?>
															</select>
															</div>
														</div>
													<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
													alt="add-modal-kar"
												>
												Close
												</button>
												<input type="submit" name="update" class="btn btn-primary" value ="Simpan">
											</div>
											</form>
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
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>

	</body>
</html>
