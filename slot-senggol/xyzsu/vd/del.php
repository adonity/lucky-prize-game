<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
include '../../vd/validation.php';

if (isset($_GET['usid'])) {
    $id = $_GET['usid'];
    delete_data($conn, $id);
}
// delete data query
function delete_data($conn, $id)
{

    $query = "DELETE from uvc WHERE usid=$id";
    $exec = mysqli_query($conn, $query);
    if ($exec) {
        header("location:../home.php?p=data_stats");
    }
}
