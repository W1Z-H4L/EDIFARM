<?php
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
	$lahan = $_POST['lahan'];

	if($username&&$nama&&$kelamin&&$alamat&&$hp&&$lahir&&$email&&$pw&&$capt&&$lahan){
		$query =  "INSERT INTO user VALUES ('3', '$username','$nama','$kelamin','$alamat', '$hp','$lahir','$email','$pw','$capt', '2', '', '$lahan')";
		$result = mysqli_query($koneksi,$query);
	}
}
?>
<?php
include ('koneksi.php');
if(isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$luas = $_POST['luas'];
	$des = $_POST['des'];
	$tempat = $_POST['tempat'];
	$query =  "INSERT INTO user VALUES ('02', '$nama','$luas','$deskripsi','$tempat')";
	$result = mysqli_query($koneksi,$query);
	
}if ($idPilihan){
	$judul = $namalhn;
}else{
	$judul = "Pilih Lahan";
};
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<title>Laporan</title>
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
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Laporan</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Dashboard</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Laporan
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<!-- Laporan Karyawan Mulai -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Laporan Karyawan</h4>
						</div>
						<div class="pb-20">
							<table class="data-table-export table stripe hover nowrap">
								<thead>
									<tr>
									<th class="table-plus datatable-nosort">Username</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>No. HP</th>
										<th>Tgl Lahir</th>
										<th>email</th>
										<th>Lahan</th>
				
									</tr>
								</thead>
								<tbody>
								<?php
									$query = mysqli_query($koneksi,"SELECT * FROM user INNER JOIN lahan on user.id_lahan=lahan.id_lahan where id_level = '2'");
									if(mysqli_num_rows($query)>0){ ?>
									<?php
									while($data = mysqli_fetch_array($query)){
								?>
									<tr>
									<td class="table-plus"><?php echo $data["username"];?></td>
										<td><?php echo $data["nama"];?></td>
										<td><?php echo $data["jenis_kelamin"];?></td>
										<td><?php echo $data["alamat"];?></td>
										<td><?php echo $data["no_hp"];?></td>
										<td><?php echo $data["tanggal_lahir"];?></td>
										<td><?php echo $data["email"];?></td>
										<td><?php echo $data["nama_lahan"];?></td>
									</tr>
									<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Laporan Karyawan Berhenti -->

						<!-- Laporan Konsultasi Mulai -->
				
					<!-- Laporan konsultasi berhenti -->
					
					<!-- Laporan Lahan Mulai -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Laporan Lahan</h4>
						</div>
						<div class="pb-20">
							<table class="data-table-export table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Nama Lahan</th>
										<th>Luas Lahan</th>
										<th>Tempat Lahan</th>
										<th>Deskripsi</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$query = mysqli_query($koneksi,"SELECT nama_lahan, luas_lahan, tempat, deskripsi FROM lahan");
									if(mysqli_num_rows($query)>0){ ?>	
									<?php
									while($data = mysqli_fetch_array($query)){
								?>
									<tr>
									<td class="table-plus"><?php echo $data["nama_lahan"];?></td>
										<td><?php echo $data["luas_lahan"];?></td>
										<td><?php echo $data["tempat"];?></td>
										<td><?php echo $data["deskripsi"];?></td>
									</tr>
									<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Laporan Lahan Berhenti -->

					<!-- Laporan konsultasi Mulai -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Laporan Konsultasi</h4>
						</div>
						<div class="pb-20">
							<table class="data-table-export table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Tanggal Konsultasi</th>
										<th>Nama Karyawan</th>
										<th>Nama Lahan</th>
										<th>Jenis Padi</th>
										<th>Keluhan</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$query = mysqli_query($koneksi,"SELECT * FROM consul INNER JOIN jadwal ON consul.id_jadwal = jadwal.id_jadwal INNER JOIN user ON jadwal.id_user=user.id_user INNER JOIN lahan ON user.id_lahan = lahan.id_lahan INNER JOIN sesi_tanam ON jadwal.id_sesi = sesi_tanam.id_sesi INNER JOIN jenis ON sesi_tanam.id_jenis = jenis.id_jenis WHERE consul.status='belum'");
								if(mysqli_num_rows($query)>0){
								?>
								<?php
									while($data = mysqli_fetch_array($query)){
										$tanggal=$data["tanggal_consul"];
										$nama_kar=$data["nama"];
										$nama_lahan=$data["nama_lahan"];
										$jenis=$data["nama_jenis"];
										$des=$data["isi"];
										
								?>		
								<tr >
										<td><?php echo $data["tanggal_consul"];?></td>
										<td><?php echo $data["nama"];?></td>
										<td><?php echo $data["nama_lahan"];?></td>
										<td><?php echo $data["nama_jenis"];?></td>
										<td><?php echo $data["isi"];?></td>
									<?php
									}};
									?>
										
								</tbody>
							</table>
						</div>
					</div>
					<!-- Laporan Lahan Berhenti -->
		<!-- welcome modal end -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="vendors/scripts/datatable-setting.js"></script>
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
