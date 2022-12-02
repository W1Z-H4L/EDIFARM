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

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
				<div class="title pb-20">
						<h2 class="h3 mb-0">Jadwal</h2>
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
									<div class="modal-body">
										<h4 class="h4">
											<span class="event-icon weight-400 mr-3"></span
											><span class="event-title"></span>
										</h4>
										<div class="event-body"></div>
									</div>
									<div class="modal-footer">
										<button
											type="button"
											class="btn btn-primary"
											data-dismiss="modal"
										>
											Batal
										</button>
									</div>
								</div>
							</div>
						</div>

						<div
							id="modal-view-event-add"
							class="modal modal-top fade calendar-modal"
						>
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<form id="add-event">
										<div class="modal-body">
											<h4 class="text-blue h4 mb-10">Tambah Detail Jadwal</h4>
											<div class="form-group">
												<label>Nama Jadwal</label>
												<input type="text" class="form-control" name="ename" />
											</div>
											<div class="form-group">
												<label>Jenis Padi</label>
												<input type="text" class="form-control" name="ename" />
											</div>
											<div class="form-group">
												<label>Mulai Tanggal</label>
												<input
													type="text"
													class="datetimepicker form-control"
													name="edate"
												/>
											</div>
											<div class="form-group">
												<label>Sampai Tanggal</label>
												<input
													type="text"
													class="datetimepicker form-control"
													name="edate"
												/>
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">
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
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
		<script src="vendors/scripts/calendar-setting.js"></script>
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
