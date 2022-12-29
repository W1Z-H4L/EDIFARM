<?php
include('koneksi.php');






if(isset($_POST['update'])) {
	$id = $_POST ['id'];
	$status = $_POST['status'];
	
	
	$query =  "UPDATE `consul` SET `status` = '$status' where `consul`.`id_consul` = '$id'";
	$result = mysqli_query($koneksi,$query);
}
// var_dump($rows);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://67ed-114-125-77-60.ap.ngrok.io/edifarm-web/EDIFARM/api/test.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
curl_close($ch);      
$rows = json_decode($output, true);

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
					
					<?php foreach($rows as $row) : 
						$foto=$row["Foto"];
						?>

						<?php $data = file_get_contents("https://67ed-114-125-77-60.ap.ngrok.io/edifarm-web/EDIFARM/api/image_diag/$foto");
						$json = base64_encode($data); ?>

					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box text-center">
							<div class=" d-flex justify-content-between pb-10">
								<img class="card-img-top" src="data:image/png;base64, <?php echo $json;?>" alt=""/>
								
							</div>
							<div class="card-body">
								<h5 class="card-title weight-500 text-left"><?= $row["isi"];?></h5>
								<p class="card-text text-left">Tekan tombol detail untuk melihat konsultasi berikut.</p>
								<div>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detail<?php echo $row['id_consul'];?>" >Detail</a>
									
								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>
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
