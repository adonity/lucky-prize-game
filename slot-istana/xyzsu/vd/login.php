<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include '../../vd/validation.php';

// if (isset($_POST['submit'])) {
$minume = $_POST['minume'];
$pwd = md5($_POST['pwd']);

$data = mysqli_query($conn, "SELECT * FROM adm WHERE minume='$minume' AND pwd='$pwd'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	// $sdata = mysqli_query($conn, "SELECT * FROM adm WHERE minume='$minume'");
	// $row = mysqli_fetch_assoc($sdata);

	$_SESSION['minume'] = $minume;
	header("location:../home.php");
} else {
	header("location:../index.php?pesan=gagal");
}
