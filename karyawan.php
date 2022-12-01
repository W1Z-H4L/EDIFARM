<?php 
include('koneksi.php');
$sukses="";
$error="";

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	$lahir = $_POST['lahir'];
	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$capt = $_POST['capt'];

	if($username&&$nama&&$kelamin&&$alamat&&$hp&&$lahir&&$email&&$pw&&$capt){
		$query =  "INSERT INTO user VALUES ('04', '$username','$nama','$kelamin','$alamat', '$hp','$lahir','$email','$pw','$capt', 'Karyawan', '','1')";
		$result = mysqli_query($koneksi,$query);
		if($result){
			$sukses ="Berhasil memasukkan data";
		}else{
			$error ="Gagal memasukkan data";
		}
	}else{

	}
}
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	$lahir = $_POST['lahir'];
	$email = $_POST['email'];
	$capt = $_POST['capt'];
	
	$query =  "UPDATE `user` SET `username` = '$username', `nama` = '$nama', `jenis_kelamin` = '$kelamin', `alamat` = '$alamat', `no_hp` = '$hp', `tanggal_lahir` = '$lahir', `email` = '$email', `caption` = '$capt'WHERE `user`.`id_user` = '$id';";
	$result = mysqli_query($koneksi,$query);
}
if(isset($_GET['op'])){
	$op=$_GET['op'];
}else{
	$op="";
}
if($op == 'delete'){
	$id = $_GET['id'];
	$query =  "DELETE FROM user WHERE id_user='$id'";
	$result = mysqli_query($koneksi,$query);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Karyawan</title>
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
					<div class="title pb-20">
						<h2 class="h3 mb-0">Karyawan</h2>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Tabel Karyawan</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Username</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>No. HP</th>
										<th>Tgl Lahir</th>
										<th>email</th>
										<th class="table-plus datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$query = mysqli_query($koneksi,"SELECT * FROM user where level = 'karyawan'");
								if(mysqli_num_rows($query)>0){ ?>
								<?php
									while($data = mysqli_fetch_array($query)){
										$id=$data["id_user"];
										$jeniskel=$data["jenis_kelamin"];
								?>		
								<tr >
										<td><?php echo $data["username"];?></td>
										<td><?php echo $data["nama"];?></td>
										<td><?php echo $jeniskel;?></td>
										<td><?php echo $data["alamat"];?></td>
										<td><?php echo $data["no_hp"];?></td>
										<td><?php echo $data["tanggal_lahir"];?></td>
										<td><?php echo $data["email"];?></td>
										<td>
											<!-- Edit -->
											<a href="#" data-color="#265ed7"
											data-toggle="modal"
											data-target="#editkar<?php echo $data["id_user"];?>"
												><i class="icon-copy dw dw-edit2"></i
											></a>
											<div
												class="modal fade bs-example-modal-lg"
												id="editkar<?php echo $data["id_user"];?>"
												tabindex="-1"
												role="dialog"
												aria-labelledby="myLargeModalLabel"
												aria-hidden="true"
											>
												<div class="modal-dialog modal-lg modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="myLargeModalLabel">
																Edit Karyawan
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
																<form action="karyawan.php" method="POST">
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="nama">ID</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="hidden" name="id" id="id" value="<?php echo $data["id_user"];?>">
																		</div>
																	</div>	
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="nama">Username</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="text" name="username" id="username" value="<?php echo $data["username"];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="nama">Nama</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $data["nama"];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																	<label class="col-sm-12 col-md-2 col-form-label">Kelamin</label>
																		<div class="col-sm-12 col-md-10">
																		<select class="custom-select col-12" name="kelamin">
																			<option value="Laki-laki" <?php if($jeniskel=="Laki-laki") echo "selected"?>>Laki-laki</option>
																			<option value="Perempuan" <?php if($jeniskel=="Perempuan") echo "selected"?>>Perempuan</option>
																		</select>
																	</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="alamat">Alamat</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $data["alamat"];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="hp">No. HP</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="text" name="hp" id="hp" value="<?php echo $data["no_hp"];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																	<label class="col-sm-12 col-md-2 col-form-label">Tgl. Lahir</label>
																	<div class="col-sm-12 col-md-10">
																		<input
																			class="form-control date"
																			value="<?php echo $data["tanggal_lahir"];?>"
																			type="date"
																			name="lahir"
																		/>
																	</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="email">Email</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control" type="text" name="email" id="email" value="<?php echo $data["email"];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-2 col-form-label" for="capt">Motivasi</label>
																		<div class="col-sm-12 col-md-10">
																			<input class="form-control"  type="text" name="capt" id="capt" value="<?php echo $data["caption"];?>">
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
																			<input type="submit" name="update" class="btn btn-primary" value="Update">
																		</div>
																	</div>
																</form>		
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Hapus -->
											<a href="karyawan.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin ingin hapus data?')" data-color="#e95959" 
												><i class="icon-copy dw dw-delete-3"></i
											></a>

											
										</td>
									</tr>	
								<?php  
									} 
							 	} 
								?>	
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
				</div>
			</div>
		<!-- tambah -->
		<button 
		href="#"
			class="welcome-modal-btn"
			data-toggle="modal"
			data-target="#tambahkar">
			 +
		</button>
		<!-- tambah modal -->
		<div
			class="modal fade bs-example-modal-lg"
			id="tambahkar"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myLargeModalLabel"
			aria-hidden="true"
		>
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">
						Tambah Karyawan
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
						<form action="karyawan.php" method="POST">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="nama">Username</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="nama" placeholder="andru27" name="username">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="luas">Nama</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Andru Christo" type="text" name="nama">
								</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kelamin</label>
								<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="kelamin">
									<option selected="">Pilih salah satu</option>
									<option value="1">Laki-laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="des">Alamat</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Lumajang" type="text" name="alamat">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="tempat">No. HP</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="085232451543" type="text" name="hp">
								</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tgl. Lahir</label>
							<div class="col-sm-12 col-md-10">
								<input
									class="form-control date"
									placeholder="Pilih tanggal lahir"
									type="date"
									name="lahir"
								/>
							</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="tempat">Email</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="andru@gmail.com" type="text" name="email">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="tempat">Password</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="******" type="password" name="pw">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="tempat">Motivasi</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="hidup adalah makan" type="text" name="capt">
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
			</div>
		</div>
		<!-- edit modal -->
		
		

		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- <script src="src/scripts/jquery.min.js"></script> -->
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		
		<!-- Datatable Setting js -->
		<script src="vendors/scripts/datatable-setting.js"></script>
	</body>
</html>
