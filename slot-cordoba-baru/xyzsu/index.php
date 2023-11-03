<?php
include '../vd/validation.php';
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Admin Login</title>
	<!-- <link rel="shortcut icon" type="image/icon" href="../img/fafafa777.png"> -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="login-box">
		<!-- <center><img src="../img/fafafa777.png" alt="FAFAFA777" width="150"></center> -->
		<form id="mpi" method="POST" action="./vd/login.php">
			<div class="user-box">
				<input type="text" name="minume" required>
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="pwd" required>
				<label>Password</label>
			</div>

			<button type="submit" name="submit">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Submit
			</button>
		</form>
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<div class='row' style='margin-top: 15px';>
				<div class='col-md-12'>
					<div class='box box-solid bg-red'>
						<div class='box-header'>
							<h3 class='box-title' style='color: red'>Login Gagal!</h3>
						</div>
						<div class='box-body'>
							<p style='color: #610808'>Username atau password yang anda masukan salah.</p>
						</div>
					</div>
				</div>
			</div>
		</div>";
			} else if ($_GET['pesan'] == "fail") {
				echo "<div class='row' style='margin-top: 15px';>
				<div class='col-md-12'>
					<div class='box box-solid bg-red'>
						<div class='box-header'>
							<h3 class='box-title' style='color: red'>Login Gagal!</h3>
						</div>
						<div class='box-body'>
							<p style='color: #610808'>Silahkan login terlebih dahulu</p>
						</div>
					</div>
				</div>
			</div>
		</div>";
			}
		}
		?>
	</div>
</body>

</html>
