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
									$query = mysqli_query($koneksi,"SELECT * FROM user where id_level = '2'");
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
										<td><?php echo $data["id_lahan"];?></td>
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
						<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
									<?php echo $judul ?>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
									<?php 
									$query1 = mysqli_query($koneksi,"SELECT * FROM lahan");
									if(mysqli_num_rows($query1)>0){ 
									?>
									<?php
										while($data1 = mysqli_fetch_array($query1)){
											$namalahan1=$data1["nama_lahan"];
											$idlahan1=$data1["id_lahan"];
									?>		
										<li><a class="dropdown-item" href="laporan.php?idlhn=<?=$idlahan1; ?>"><?php echo $namalahan1 ?></a></li>
									<?php  
										} 
									} 
									?>
									</ul>
								</div>
							</div>
						<div class="pb-20">
							<table class="data-table-export table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Tanggal Konsultasi</th>
										<th>Nama Lahan</th>
										<th>Nama Karyawan</th>
										<th>Jenis Padi</th>
										<th>Pertanyaan</th>
									</tr>
								</thead>
								<tbody>
									
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
