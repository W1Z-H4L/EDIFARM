<?php
require('koneksi.php');
session_start();

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);

	if(!$username) {
		$error = "Email tidak boleh kosong";
		echo $error;
		return;
	}

	if(!$pass) {
		$error = "Password tidak boleh kosong!";
		echo $error;
		return;
	}

	$sql = "SELECT * FROM user WHERE `id_level`='1'";
	$result = mysqli_query($koneksi, $sql);
	$num = mysqli_num_rows($result);

	if(!$num) {
		$error = "User tidak ditemukan";
		echo $error;
		return;
	}

	while ($row = mysqli_fetch_array($result)){
		$id = $row['id_user'];
		$userVal = $row['username'];
		$passVal =$row['password'];
		$namamu = $row['nama'];
	};

	if($username != $userVal) {
		$error = "Email anda salah!";
		echo $error;
		return;
	}

	if($pass != $passVal) {
		$error = "Password anda salah!";
		echo $error;
		return;
	}

	header('Location: index.php?nama=' . urlencode($namamu));
}
?>
<?php

// include ('koneksi.php');
// error_reporting(0);
// // session_start();

// // if (isset($_SESSION['username'])) {
// //     header("Location: index.php");
// // }

// if (isset($_POST['submit'])) {
//     $username = ($_POST['username']);
//     $password = ($_POST['password']);
	

//     if(!empty(trim($username))&& !empty(trim($password))){
//         $sql = "SELECT * FROM user WHERE username='$username'";
//         $result = mysqli_query($koneksi, $sql);
//         $num = mysqli_num_rows($result);
//         while($row = mysqli_fetch_array($result)){
//             $userval = $row['username'];
//             $passval = $row['password'];
         
//         }

//         if ($num != 0) {
//             if($userval==$username  && $passval==$password){
//                 header('Location: index.php?nama=');
//             }else{
//                 echo "<script>alert('Password Anda salah. Silahkan coba lagi!')</script>";
//             }
//         }else{
//             echo "<script>alert('Username Anda Salah. Silahkan coba lagi!')</script>";
//         }
//     }else{
//         echo "<script>alert('Username dan Password Salah')</script>";
//     }
// }

// ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Edifarm
		</title>

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
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
	<body 
    
    class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.php">
						<img src="vendors/images/logo_edifarmbaru.png" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login.svg" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Masuk Di EdiFARM</h2>
							</div>
							<form action="login.php" method="POST">
								<div class="input-group custom">
									<input
										type="username"
										class="form-control form-control-lg"
										placeholder="Username"
                                        name="username"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
								<div class="input-group custom">
									<input
										type="password"
										class="form-control form-control-lg"
										placeholder="**********"
                                        name="password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
                                
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Ingat!</label
											>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Masuk">
											<div class="col-md-4 col-sm-12 mb-30">
												
							
											<!-- <a
												class="btn btn-primary btn-lg btn-block"
												href="index.php"
												>Masuk</a
											> -->
										
											
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
	</body>
</html>
