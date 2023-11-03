<?php
include './validation.php';
error_reporting(0);
ob_start();
session_start();
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {
	$unme = $_POST['unme'];
	$vpwd =  $_POST['vpwd'];

	$data = mysqli_query($conn, "SELECT * FROM uvc WHERE vpwd='$vpwd'");
	$cek = mysqli_num_rows($data);

	if ($cek) {

		// $play = mysqli_query($conn, "SELECT FROM uvc WHERE vpwd='$vpwd'");
		// $vad = mysqli_fetch_array($play);



		$row = mysqli_fetch_array($data);
		$_SESSION['usid'] = $row['usid'];
		$_SESSION['unme'] = $row['unme'];
		$_SESSION['vid'] = $row['vid'];
		$_SESSION['prize'] = $row['prize'];
		$_SESSION['min'] = $row['min'];
		$_SESSION['max'] = $row['max'];
		$_SESSION['stats'] = $row['stats'];

		$usid = $_SESSION['usid'];
		mysqli_query($conn, "UPDATE uvc SET stats='1' WHERE usid='$usid'");

		header("location:../slot.php");
	} else {
		header("location:../index.php?pesan=gagal");
	}
}
