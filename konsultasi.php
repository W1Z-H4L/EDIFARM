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
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
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
	</head>
	<body>
		

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo1.jpg" alt="" />
											<h3>Lea R. Frith</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo2.jpg" alt="" />
											<h3>Erik L. Richards</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo3.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo4.jpg" alt="" />
											<h3>Renee I. Hansen</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>Vicki M. Coleman</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="vendors/images/photo1.jpg" alt="" />
							</span>
							<span class="user-name">Ross C. Lopez</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
								<li><a href="index.html">Dashboard style 1</a></li>
								<li><a href="index2.html">Dashboard style 2</a></li>
								<li><a href="index3.html">Dashboard style 3</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Forms</span>
							</a>
							<ul class="submenu">
								<li><a href="form-basic.html">Form Basic</a></li>
								<li>
									<a href="advanced-components.html">Advanced Components</a>
								</li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
								<li><a href="html5-editor.html">HTML5 Editor</a></li>
								<li><a href="form-pickers.html">Form Pickers</a></li>
								<li><a href="image-cropper.html">Image Cropper</a></li>
								<li><a href="image-dropzone.html">Image Dropzone</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-table"></span
								><span class="mtext">Tables</span>
							</a>
							<ul class="submenu">
								<li><a href="basic-table.html">Basic Tables</a></li>
								<li><a href="datatable.html">DataTables</a></li>
							</ul>
						</li>
						<li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-archive"></span
								><span class="mtext"> UI Elements </span>
							</a>
							<ul class="submenu">
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li><a href="ui-cards.html">Cards</a></li>
								<li><a href="ui-cards-hover.html">Cards Hover</a></li>
								<li><a href="ui-modals.html">Modals</a></li>
								<li><a href="ui-tabs.html">Tabs</a></li>
								<li>
									<a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
								</li>
								<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
								<li><a href="ui-notification.html">Notification</a></li>
								<li><a href="ui-timeline.html">Timeline</a></li>
								<li><a href="ui-progressbar.html">Progressbar</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
								<li><a href="ui-list-group.html">List group</a></li>
								<li><a href="ui-range-slider.html">Range slider</a></li>
								<li><a href="ui-carousel.html">Carousel</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-command"></span
								><span class="mtext">Icons</span>
							</a>
							<ul class="submenu">
								<li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
								<li><a href="font-awesome.html">FontAwesome Icons</a></li>
								<li><a href="foundation.html">Foundation Icons</a></li>
								<li><a href="ionicons.html">Ionicons Icons</a></li>
								<li><a href="themify.html">Themify Icons</a></li>
								<li><a href="custom-icon.html">Custom Icons</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Charts</span>
							</a>
							<ul class="submenu">
								<li><a href="highchart.html">Highchart</a></li>
								<li><a href="knob-chart.html">jQuery Knob</a></li>
								<li><a href="jvectormap.html">jvectormap</a></li>
								<li><a href="apexcharts.html">Apexcharts</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Additional Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="video-player.html">Video Player</a></li>
								<li><a href="login.html">Login</a></li>
								<li><a href="forgot-password.html">Forgot Password</a></li>
								<li><a href="reset-password.html">Reset Password</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-chat-right-dots"></span
								><span class="mtext">Error Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="400.html">400</a></li>
								<li><a href="403.html">403</a></li>
								<li><a href="404.html">404</a></li>
								<li><a href="500.html">500</a></li>
								<li><a href="503.html">503</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-back"></span
								><span class="mtext">Extra Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="blank.html">Blank</a></li>
								<li><a href="contact-directory.html">Contact Directory</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="pricing-table.html">Pricing Tables</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Multi Level Menu</span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li class="dropdown">
									<a href="javascript:;" class="dropdown-toggle">
										<span class="micon fa fa-plug"></span
										><span class="mtext">Level 2</span>
									</a>
									<ul class="submenu child">
										<li><a href="javascript:;">Level 2</a></li>
										<li><a href="javascript:;">Level 2</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
							</ul>
						</li>
						<li>
							<a href="sitemap.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-diagram-3"></span
								><span class="mtext">Sitemap</span>
							</a>
						</li>
						<li>
							<a href="chat.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-bug"></span
								><span class="mtext">Konsultasi</span>
							</a>
						</li>
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Extra</div>
						</li>
						<li>
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-pdf"></span
								><span class="mtext">Documentation</span>
							</a>
							<ul class="submenu">
								<li><a href="introduction.html">Introduction</a></li>
								<li><a href="getting-started.html">Getting Started</a></li>
								<li><a href="color-settings.html">Color Settings</a></li>
								<li>
									<a href="third-party-plugins.html">Third Party Plugins</a>
								</li>
							</ul>
						</li>
						<li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon bi bi-layout-text-window-reverse"></span>
								<span class="mtext"
									>Landing Page
									<img src="vendors/images/coming-soon.png" alt="" width="25"
								/></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
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
									<a href="index.html">Home</a>
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
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card card-box">
					<img
						class="card-img-top"
						src="vendors/images/img2.jpg"
						alt="Card image cap"
					/>
					<div class="card-body">
						<h5 class="card-title weight-500">Lahan 1</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
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
						<h5 class="card-title weight-500">Lahan 2</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
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
						<h5 class="card-title weight-500">Lahan 3</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
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
						<h5 class="card-title weight-500">Lahan 4</h5>
						<p class="card-text">
							Berikut adalah hasil diagnosa penyakit, klik lihat untuk melihat detailnya.
						</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">Lihat</a>
					</div>
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
								<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div><div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Lahan</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
								<div class="pd-20 card-box">
									<h5 class="h5 mb-20">Labels Progress</h5>
									<div class="progress mb-20">
										<div
											class="progress-bar bg-success"
											role="progressbar"
											style="width: 50%"
											aria-valuenow="0"
											aria-valuemin="0"
											aria-valuemax="100"
										>
											50%
										</div>
									</div>
									<div class="progress mb-20">
										<div
											class="progress-bar"
											role="progressbar"
											style="width: 25%"
											aria-valuenow="25"
											aria-valuemin="0"
											aria-valuemax="100"
										>
											25%
										</div>
									</div>
									<div class="progress">
										<div
											class="progress-bar bg-info"
											role="progressbar"
											style="width: 75%"
											aria-valuenow="25"
											aria-valuemin="0"
											aria-valuemax="100"
										>
											75%
										</div>
									</div>
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
		</div>>


		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
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
