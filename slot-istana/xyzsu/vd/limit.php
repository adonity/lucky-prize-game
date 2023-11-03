<?php
include '../../vd/validation.php';
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {

    $limit = $_POST['limit'];
    $limit1= str_replace(".", "", $limit);

    $cek = "SELECT * from company";
    $sql = mysqli_query($conn, $cek);


    if ($sql) {
        $query = mysqli_query($conn, "UPDATE company SET comp_limit = '$limit1'");
        if ($query) {
            header("location:../home.php?p=data_stats");
        } else {
            die("ERROR : " . mysqli_error($conn));
        }
    }
}
