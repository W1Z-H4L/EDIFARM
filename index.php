<?php
	session_start();
	if (!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Edifarm</title>
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/logo_edifarm.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/logo_edifarm.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/logo_edifarm.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
	<body>
		<?php  
		include 'header.php'; ?>

		<div class="right-sidebar">
		<?php include 'rightbar.php'; ?>
		</div>

		<?php include 'sidebar.php'; ?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Dashboard</h2>
				</div>
			<a 
				href="lahan.php">
				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">Lahan 1</div>
									<div class="font-14 text-secondary weight-500">
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-bar-chart"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">Lahan 2</div>
									<div class="font-14 text-secondary weight-500">
										
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-pie-chart"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">Lahan 3</div>
									<div class="font-14 text-secondary weight-500">
										
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-line-chart"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">Lahan 4</div>
									<div class="font-14 text-secondary weight-500"></div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-area-chart" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row pb-10">
					<div class="col-md-8 mb-20">
						<div class="card-box height-100-p pd-20">
							<div
								class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3"
							>
								<div class="h5 mb-md-0">Progres Lahan</div>
								<div class="form-group mb-md-0">
									<select class="form-control form-control-sm selectpicker">
										<option value="">Per-Minggu</option>
										<option value="">Per-Bulan</option>
										<option value="">6 Bulan Terakhir</option>
										<option value="">1 Tahun Terakhir</option>
									</select>
								</div>
							</div>
							<div id="chart2"></div>
						</div>
					</div>
					<div class="col-md-4 mb-20">
						<div
							class="card-box min-height-200px pd-20 mb-20"
							data-bgcolor="#455a64"
						>
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-up-c"></i> 40%</div>
									<div class="font-12">1 Bulan Terakhir</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14"></div>
									<div class="font-25 weight-600">Lahan </div>
								</div>
								<div class="max-width-150">
									<div id="appointment-chart"></div>
								</div>
							</div>
							</div><script src="https://apps.elfsight.com/p/platform.js" defer></script>
							<div class="elfsight-app-cfd868b2-6107-4fa9-ae0d-73f01284f4d4"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 mb-20">
						<div class="card-box height-100-p pd-20 min-height-200px">
							<div class="d-flex justify-content-between pb-10">
								<div class="h5 mb-0">Jadwal Karyawan</div>
								<div class="dropdown">
									<a
										class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
										data-color="#1b3133"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										<i class="dw dw-more"></i>
									</a>
									<div
										class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
									>
										<a class="dropdown-item" href="calendar.php"
											><i class="dw dw-eye"></i> Lihat</a
										>
										<a class="dropdown-item" href="#"
											><i class="dw dw-edit2"></i> Edit</a
										>
										<a class="dropdown-item" href="#"
											><i class="dw dw-delete-3"></i> Hapus</a
										>
									</div>
								</div>
							</div>
							<div class="user-list">
								<ul>
									<li class="d-flex align-items-center justify-content-between">
										<div class="name-avatar d-flex align-items-center pr-2">
											<div class="avatar mr-2 flex-shrink-0">
												<img
													src="vendors/images/photo1.jpg"
													class="border-radius-100 box-shadow"
													width="50"
													height="50"
													alt=""
												/>
											</div>
											<div class="txt">
												<span
													class="badge badge-pill badge-sm"
													data-bgcolor="#e7ebf5"
													data-color="#265ed7"
													></span
												>
												<div class="font-14 weight-600"></div>
												<div class="font-12 weight-500" data-color="#b2b1b6">
													
												</div>
											</div>
										</div>
										<div class="cta flex-shrink-0">
											<a href="calendar.php" class="btn btn-sm btn-outline-primary"
												>Jadwal</a
											>
										</div>
									</li>
									<li class="d-flex align-items-center justify-content-between">
										<div class="name-avatar d-flex align-items-center pr-2">
											<div class="avatar mr-2 flex-shrink-0">
												<img
													src="vendors/images/photo2.jpg"
													class="border-radius-100 box-shadow"
													width="50"
													height="50"
													alt=""
												/>
											</div>
											<div class="txt">
												<span
													class="badge badge-pill badge-sm"
													data-bgcolor="#e7ebf5"
													data-color="#265ed7"
													></span
												>
												<div class="font-14 weight-600"></div>
												<div class="font-12 weight-500" data-color="#b2b1b6">
													
												</div>
											</div>
										</div>
										<div class="cta flex-shrink-0">
											<a href="#" class="btn btn-sm btn-outline-primary"
												>Jadwal</a
											>
										</div>
									</li>
									<li class="d-flex align-items-center justify-content-between">
										<div class="name-avatar d-flex align-items-center pr-2">
											<div class="avatar mr-2 flex-shrink-0">
												<img
													src="vendors/images/photo3.jpg"
													class="border-radius-100 box-shadow"
													width="50"
													height="50"
													alt=""
												/>
											</div>
											<div class="txt">
												<span
													class="badge badge-pill badge-sm"
													data-bgcolor="#e7ebf5"
													data-color="#265ed7"
													></span
												>
												<div class="font-14 weight-600"></div>
												<div class="font-12 weight-500" data-color="#b2b1b6">
													
												</div>
											</div>
										</div>
										<div class="cta flex-shrink-0">
											<a href="#" class="btn btn-sm btn-outline-primary"
												>Jadwal</a
											>
										</div>
									</li>
									<li class="d-flex align-items-center justify-content-between">
										<div class="name-avatar d-flex align-items-center pr-2">
											<div class="avatar mr-2 flex-shrink-0">
												<img
													src="vendors/images/photo4.jpg"
													class="border-radius-100 box-shadow"
													width="50"
													height="50"
													alt=""
												/>
											</div>
											<div class="txt">
												<span
													class="badge badge-pill badge-sm"
													data-bgcolor="#e7ebf5"
													data-color="#265ed7"
													></span
												>
												<div class="font-14 weight-600"></div>
												<div class="font-12 weight-500" data-color="#b2b1b6">
													
												</div>
											</div>
										</div>
										<div class="cta flex-shrink-0">
											<a href="calendar.php" class="btn btn-sm btn-outline-primary"
												>Jadwal</a
											>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-20">
					<a href="padi.php"
					>
						<div class="card-box height-100-p pd-20 min-height-200px">
							<div class="max-width-300 mx-auto">
							</div>
								<img src="vendors/images/farm2.svg" alt="" 
								/> 
							<div 
								class="text-center">
								<div class="h5 mb-1">Jenis Padi</div>
								<div
									class="font-14 weight-500 max-width-200 mx-auto pb-20"
									data-color="#a6a6a7"
								>
								Pada lahan terdapat jenis padi yang dapat berpengaruh terhadap pertumbuhan padi
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-20">
					<a href="padi.php"
					>
						<div class="card-box height-100-p pd-20 min-height-200px">
							<div class="max-width-300 mx-auto">
							</div>
								<img src="vendors/images/farming.svg" alt="" 
								/> 
							<div 
								class="text-center">
								<div class="h5 mb-1">Edifarm</div>
								<div
									class="font-14 weight-500 max-width-200 mx-auto pb-20"
									data-color="#a6a6a7"
								>
									Sawah memerlukan sistem management controlling oleh setiap karyawan
								</div>
								<a href="tentang.php" class="btn btn-primary btn-lg">Tentang</a>
							</div>
						</div>
					</div>
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Data Karyawan</div>
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
									</tr>
								</thead>
								<tbody>
								<?php 
								$query = mysqli_query($koneksi,"SELECT * FROM user where id_level = '2'");
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
									</tr>	
								<?php  
									} 
							 	} 
								?>	
								</tbody>
							</table>
				</div>

				<div class="title pb-20 pt-20">
					<h2 class="h3 mb-0">Lahan</h2>
				</div>

				<div class="row">
					<div class="col-md-4 mb-20">
						<a href="lahan.php" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="vendors/images/sawah1.jpg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Lahan 1</h3>
								<p class="max-width-200">
									
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 mb-20">
						<a href="lahan.php" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="vendors/images/padi2.jpg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Lahan 2</h3>
								<p class="max-width-200">
									
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 mb-20">
						<a href="lahan.php" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="vendors/images/padi3.jpg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Lahan 3</h3>
								<p class="max-width-200">
									
								</p>
							</div>
						</a>
					</div>
				</div
					>
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
						Edit Data Karyawan
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
									<label class="col-sm-12 col-md-2 col-form-label">Nama Karyawan</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text" placeholder="Nama Lengkap">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Username</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text" placeholder="Username">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text" placeholder="Ponorogo">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control date-picker" placeholder="Pilih Tanggal" type="text">
									</div>
								</div>
								<div class="form-group row align-items-center">
									<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-8">
									<div
									class="custom-control custom-radio custom-control-inline pb-0">
										<input
											type="radio"
											id="male"
											name="gender"
											class="custom-control-input"
											/>
											<label class="custom-control-label" for="male"
												>Wanita</label
											>
									</div>
									
								</div>
									<div 
									class="custom-control custom-radio custom-control-inline pb-0">
										<input
											type="radio"
											id="female"
											name="gender"
											class="custom-control-input"
											/>
											<label class="custom-control-label" for="female"
												>Laki-laki</label>
									</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Lahan</label>
									<div class="col-sm-12 col-md-10">
										<select class="custom-select col-12">
											<option selected="">Pilih...</option>
											<option value="1">Lahan 1</option>
											<option value="2">Lahan 2</option>
											<option value="3">Lahan 3</option>
											<option value="3">Lahan 4</option>
										</select>
									</div>
								</div>
								</form>
								
									<div class="modal-footer">
										<button
											type="button"
											class="btn btn-secondary"
											data-dismiss="modal"
											alt="add-modal-kar"
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
		
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
		<script src="vendors/scripts/apexcharts-setting.js"></script>
	</body>
</html>
