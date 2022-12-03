<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Lahan</title>
		<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo_edifarm.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo_edifarm.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
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
						<h2 class="h3 mb-0">Padi</h2>
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
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Padi</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>		
		<div class="add-modal-kar">
			<button 
			href="#"
			class="welcome-modal-btn"
			data-toggle="modal"
			data-target="#bd-example-modal-lg"
			>
			 +
		</button></div>
		
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
						Large modal
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
									<label class="col-sm-12 col-md-2 col-form-label">Nama Lahan</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text" placeholder="Lahan 1">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Search</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder="Search Here" type="search">
									</div>
								</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Email</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="bootstrap@example.com" type="email">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">URL</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="https://getbootstrap.com" type="url">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="1-(111)-111-1111" type="tel">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Password</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="password" type="password">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Number</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="100" type="number">
														</div>
													</div>
													<div class="form-group row">
														<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Date</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control date-picker" placeholder="Select Date" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Month</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control month-picker" placeholder="Select Month" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Time</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control time-picker td-input" placeholder="Select time" type="text" readonly="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Select</label>
														<div class="col-sm-12 col-md-10">
															<select class="custom-select col-12">
																<option selected="">Choose...</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Color</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="#563d7c" type="color">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="50" type="range">
														</div>
													</div>
												</form>
							
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
												<button type="button" class="btn btn-primary">
													Save changes
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
		
	</body>
</html>
