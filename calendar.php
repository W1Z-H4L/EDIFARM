<?php 
require('koneksi.php');
session_start();


	$idPilihan = $_GET['idlhn'];
	
	
		
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['tambah'])) {
	
	 $user = $_POST['user'];
	 $kegiatan = $_POST['kegiatan'];
	 $start = $_POST['start'];
	 $end = $_POST['end'];
	 $query =  "INSERT INTO `jadwal` (`id_jadwal`, `id_user`, `kegiatan`, `tanggal_mulai`, `tanggal_selesai`, `status`, `id_sesi`, `id_lahan`) VALUES ('', '$user','$kegiatan','$start','$end', 'belum', '1', '1')";
	 $result = mysqli_query($koneksi,$query);
 }
 if(isset($_POST['id'])) {
	$id = $_POST['id'];
	$kegiatan = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$query =  "UPDATE jadwal set kegiatan = '$kegiatan', tanggal_mulai= '$start', tanggal_selesai = '$end' WHERE `jadwal`.`id_jadwal` = '$id'";
	$result = mysqli_query($koneksi,$query);
}

	$sql5 = "SELECT * FROM jadwal INNER JOIN lahan ON jadwal.id_lahan=lahan.id_lahan where jadwal.id_lahan = '$idPilihan'";
	$result8 = mysqli_query($koneksi,$sql5);
	$dataArr = array();
	if(mysqli_num_rows($result8)>0){ 
	while($data2 = mysqli_fetch_array($result8)){
		$namalhn = $data2['nama_lahan'];
		$dataArr[] = array(
			'id' => $data2['id_jadwal'],
			'title' => $data2['kegiatan'],
			'start' => $data2['tanggal_mulai'],
			'end' => $data2['tanggal_selesai'],
		);
	}};
	if ($idPilihan){
		$judul = $namalhn;
	}else{
		$judul = "Pilih Lahan";
	};
 ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Edifarm</title>

		<!-- Site favicon -->
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
			href="src/plugins/fullcalendar/fullcalendar.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
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
									<h4>Jadwal</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Dashboard</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Jadwal
										</li>
									</ol>
								</nav>
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
										<li><a class="dropdown-item" href="calendar.php?idlhn=<?=$idlahan1; ?>"><?php echo $namalahan1 ?></a></li>
									<?php  
										} 
									} 
									?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 card-box mb-30">
						<div class="calendar-wrap">
							<div id="calendar"></div>
						</div>
						<!-- calendar modal -->
						<div
							id="modal-view-event"
							class="modal modal-top fade calendar-modal"
						>
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<form action="calendar.php" method="POST">
										<div class="modal-body">
											<h4 class="text-blue h4 mb-10">Detail Jadwal</h4>
											<div class="form-group">
												<label>id user</label>
												<input type="text" class="form-control" name="user" id="user" />
											</div>
											<div class="form-group">
												<label>Kegiatan</label>
												<input type="text" class="title form-control" name="kegiatan" id="kegiatan" />
											</div>
											<div class="form-group">
												<label>Mulai</label>
												<input type="datetime" class="tanggalstr form-control datetime" name="start" id="kegiatan" value="" />
											</div>
											<div class="form-group">
												<label>Selesai</label>
												<input type="datetime" class="tanggalend form-control datetime" name="end" id="kegiatan" value="" />
											</div>
											<div class="form-group">
												<label>lahan</label>
												<input type="text" class="form-control" name="user" id="user" value="<?php echo $idPilihan ?>" />
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary"  id="tombol_form" name="tambah">
												Simpan
											</button>
											<button
												type="button"
												class="btn btn-primary"
												data-dismiss="modal"
											>
												Batal
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div
							id="modal-view-event-add"
							class="modal modal-top fade calendar-modal"
						>
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<form action="calendar.php" method="POST">
										<div class="modal-body">
											<h4 class="text-blue h4 mb-10">Tambah Detail Jadwal</h4>
											<div class="form-group">
												<label>id user</label>
												<input type="text" class="form-control" name="user" id="user" />
											</div>
											<div class="form-group">
												<label>Kegiatan</label>
												<input type="text" cla ss="form-control" name="kegiatan" id="kegiatan" />
											</div>
											<div class="form-group">
												<label>Mulai</label>
												<input type="text" class="tanggalstr form-control" readOnly name="start" id="kegiatan" value="" />
											</div>
											<div class="form-group">
												<label>Selesai</label>
												<input type="text" class="tanggalend form-control" readOnly name="end" id="kegiatan" value="" />
											</div>
											<div class="form-group">
												<label>lahan</label>
												<input type="text" class="form-control" name="user" readOnly id="user" value="<?php echo $idPilihan ?>" />
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary"  id="tombol_form" name="tambah">
												Simpan
											</button>
											<button
												type="button"
												class="btn btn-primary"
												data-dismiss="modal"
											>
												Batal
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
		<!-- <script src="vendors/scripts/calendar-setting.js"></script> -->
		<script>
		jQuery("#calendar").fullCalendar({
			themeSystem: "bootstrap4",
			businessHours: false,
			defaultView: "month",
			
			header: {
				left: "title",
				center: "month,agendaWeek,agendaDay",
				right: "today prev,next",
			},
			events: <?php echo json_encode($dataArr); ?>,

			selectable: true,
			selecHelper: true,
			editable: true,
			select: function(start, end, allDay){
				var start =$.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
				var end =$.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
				$(".tanggalstr").val(start);
				$(".tanggalend").val(end);
				$("#modal-view-event-add").modal();
			},
			
			eventDrop: function(event){
				var start =$.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
				var end =$.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
				var title = event.title;
				var id = event.id;
				
				$.ajax({
					url: "calendar.php",
					type: "POST",
					data: {
						title: title,
						start:start,
						end:end,
						id:id
					}
					
				});
			},
			
			
			
			
			 
			
			// dayClick: function () {
				
			// },
			eventClick: function (event, jsEvent, view) {
				jQuery(".event-icon").html("<i class='fa fa-" + event.icon + "'></i>");
				var start =$.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
				var end =$.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
				$(".tanggalstr").val(start);
				$(".tanggalend").val(end);
				$(".title").val(event.title);
				jQuery("#modal-view-event").modal();
			},
		});</script>
	</body>
</html>
