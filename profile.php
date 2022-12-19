<?php
session_start();
include('koneksi.php');
$idUser = $_SESSION["idUser"];
if(isset($_POST['update'])) {
	$id = "1";
	$user = $_POST['username'];
	$nama = $_POST['nama'];
	$jeniskel = $_POST['jeniskel'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$ttl = $_POST['ttl'];
	$email = $_POST['email'];
	$capt = $_POST['capt'];
	
	$query =  "UPDATE `user` SET `username` = '$user', `nama` = '$nama', `jenis_kelamin` = '$jeniskel', `alamat` = '$alamat', `no_hp` = '$no_hp', `tanggal_lahir` = '$ttl', `email` = '$email', `caption` = '$capt'WHERE `user`.`id_user` = '$id';";
	$result = mysqli_query($koneksi,$query);
	$_SESSION["namaUser"] = $nama;
}
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
			href="src/plugins/cropperjs/dist/cropper.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->

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
									<h4>Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Dashboard</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Profile
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
							<?php 
								$query = mysqli_query($koneksi,"SELECT * FROM user where id_user = '$idUser'");
								if(mysqli_num_rows($query)>0){
							
									while($data = mysqli_fetch_array($query)){
										$id=$data["id_user"];
										$jeniskel=$data["jenis_kelamin"];
										 $user=$data["username"];
										 $nama=$data["nama"];
										 $alamat=$data["alamat"];
										 $no_hp=$data["no_hp"];
										 $ttl=$data["tanggal_lahir"];
										 $email=$data["email"];
										 $capt=$data["caption"];
									}}
								?>		
								<div class="profile-photo">
									<a
										
										>
										<input class="edit-avatar" type="file" name="foto" id="foto">
										<!-- <i class="fa fa-pencil"></i> -->
										<!-- <input type="file" name="foto" id="foto"> -->
									</a>
									<img
										src="vendors/images/photo1.jpg"
										alt=""
										class="avatar-photo"
									/>
									<!-- <div
										class="modal fade"
										id="modal"
										tabindex="-1"
										role="dialog"
										aria-labelledby="modalLabel"
										aria-hidden="true"
									>
										<div
											class="modal-dialog modal-dialog-centered"
											role="document"
										>
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img
															id="image"
															src="vendors/images/photo2.jpg"
															alt="Picture"
														/>
													</div>
												</div>
												<div class="modal-footer">
													<input
														type="submit"
														value="Update"
														class="btn btn-primary"
													/>
													<button
														type="button"
														class="btn btn-default"
														data-dismiss="modal"
													>
														Close
													</button>
												</div>
											</div>
										</div>
									</div> -->
								</div>
								<h5 class="text-center h5 mb-0"><?php echo $nama;?></h5>
								<p class="text-center text-muted font-14">
									<?php echo $user?>
								</p>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">Informasi Kontak</h5>
									<ul>
										<li>
											<span>Email Address:</span>
											<?php echo $email?>
										</li>
										<li>
											<span>Jenis Kelamin:</span>
											<?php echo $jeniskel?>
										</li>
										<li>
											<span>Tanggal Lahir:</span>
											<?php echo $ttl?>
										</li>
										<li>
											<span>No. Handphone:</span>
											<?php echo $no_hp?>
										</li>
										<li>
											
											<span>Alamat:</span>
											<?php echo $alamat?><br />
										</li>
										<li>
											<span>Caption</span>
											<?php echo $capt?><br />
									</ul>
								</div>
								<div class="profile-social">
									<h5 class="mb-20 h5 text-blue"></h5>
									<ul class="clearfix">
										<li>
										</li>
										<li>

										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
										<li>
											
										</li>
									</ul>
								</div>
								<div class="profile-skills">
									<h5 class="mb-20 h5 text-blue"></h5>
									<h6 class="mb-5 font-14"></h6>
									<div class="" style="">
									</div>
									<h6 class="mb-5 font-14"></h6>
									<div class="" style="">
									</div>
									<h6 class="mb-5 font-14"></h6>
									<div class="" style="">
									</div>
									<h6 class="mb-5 font-14"></h6>
									<div class="" style="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<ul class="nav nav-tabs customtab" role="tablist">
											
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#setting"
													role="tab"
													>Edit Profil</a
												>
											</li>
										</ul>
									
											<!-- Setting Tab start -->
											<div
												class="tab-pane fade  "
												id="setting"
												role="tabpanel"
											>
												<div class="profile-setting">
													<form action="profile.php" method="POST">
														<ul class="profile-edit-list row">
															<li class="weight-500 col-md-6">
																<h4 class="text-blue h5 mb-20">
																	Edit Profil
																</h4>
																<div class="form-group">
																	<label>Nama Lengkap</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																		value="<?php echo $nama?>"
																		name = "nama"
																	/>
																</div>
																<div class="form-group">
																	<label>Username</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																		value="<?php echo $user?>"
																		name = "username"
																	/>
																</div>
																<div class="form-group">
																	<label>Email</label>
																	<input
																		class="form-control form-control-lg"
																		type="email"
																		value="<?php echo $email?>"
																		name = "email"
																	/>
																</div>
																<div class="form-group">
																	<label>Tanggal Lahir</label>
																	<input
																		class="form-control form-control-lg date-picker"
																		type="text"
																		value="<?php echo $ttl?>"
																		name = "ttl"
																	/>
																</div>
																<div class="form-group">
																	<label>Jenis Kelamin</label>
																	<div class="d-flex">
																		<div
																			class="custom-control custom-radio mb-5 mr-20"
																		>
																			<input
																				type="radio"
																				id="customRadio4"
																				name = "jeniskel"
																				class="custom-control-input"
																				value="Laki-laki"
																				<?php if($jeniskel=="Laki-laki") echo "checked"?>
																			/>
																			<label
																				class="custom-control-label weight-400"
																				for="customRadio4"
																				>Laki-laki</label
																			>
																		</div>
																		<div
																			class="custom-control custom-radio mb-5"
																		>
																			<input
																				type="radio"
																				id="customRadio5"
																				name = "jeniskel"
																				class="custom-control-input"
																				value = "Perempuan"
																				<?php if($jeniskel=="Perempuan") echo "checked"?>
																			/>
																			<label
																				class="custom-control-label weight-400"
																				for="customRadio5"
																				>Perempuan</label
																			>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label>No. Handphone</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																		value="<?php echo $no_hp?>"
																		name = "no_hp"
																	/>
																</div>
																<div class="form-group">
																	<label>Alamat</label>
																	<textarea class="form-control" value="" name = "alamat"><?php echo $alamat?></textarea>
																	</div>
																
																	
																<div class="form-group">
																	<label>Caption</label>
																	<textarea class="form-control" value="" name = "capt"><?php echo $capt?></textarea>
																	</div>

																<div class="form-group mb-0">
																	<input
																		type="submit"
																		
																		class="btn btn-primary"
																		name="update"
																		value="Perbarui"
																	/>
																</div>
														</form>
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/cropperjs/dist/cropper.js"></script>
		<script>
			window.addEventListener("DOMContentLoaded", function () {
				var image = document.getElementById("image");
				var cropBoxData;
				var canvasData;
				var cropper;

				$("#modal")
					.on("shown.bs.modal", function () {
						cropper = new Cropper(image, {
							autoCropArea: 0.5,
							dragMode: "move",
							aspectRatio: 3 / 3,
							restore: false,
							guides: false,
							center: false,
							highlight: false,
							cropBoxMovable: false,
							cropBoxResizable: false,
							toggleDragModeOnDblclick: false,
							ready: function () {
								cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
							},
						});
					})
					.on("hidden.bs.modal", function () {
						cropBoxData = cropper.getCropBoxData();
						canvasData = cropper.getCanvasData();
						cropper.destroy();
					});
			});
		</script>
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
