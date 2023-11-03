<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
include '../../vd/validation.php';

if (isset($_POST['submit'])) {

    $unme = $_POST['unme'];
    $depo = $_POST['depo'];
    $Tget = str_replace(".", "", $depo);
    $vpwd = $_POST['vpwd'];
    $vid = $_POST['vid'];
    $uget = $_POST['uget'];

    $cek = "SELECT * from uvc where unme='$unme'";
    $sql = mysqli_query($conn, $cek);

    function generateRandomString($length = 7)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&!@#$%&';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $vpwd = generateRandomString();

    if ($vid == "1") {
        $min = $Tget;
        $max = $Tget;
    } else if ($vid == "2") {
        $min = 6500;
        $max = 15000;
    } else if ($vid == "3") {
        $min = 16000;
        $max = 50000;
    } else if ($vid == "4") {
        $min = $uget;
        $max = $uget;
    }

    $date = date("Y-m-d H:i:sa");

    if ($sql) {
        $query = mysqli_query($conn, "INSERT into uvc VALUES ('', '$unme', '$vpwd', '$vid', '', '$min', '$max', '$date', '', '')");
        header("location:../home.php?p=data_stats&pesan=berhasil");
    } else {
        die("ERROR : " . mysqli_error($conn));
    }
    // if (mysqli_num_rows($sql) > 0) {
    //     header("location:../home.php?p=data_stats&pesan=gagal");
    // } else {
    //     $query = mysqli_query($conn, "INSERT into uvc VALUES ('', '$unme', '$vpwd', '$vid', '', '$min', '$max', '$date', '', '')");
    //     if ($query) {
    //         header("location:../home.php?p=data_stats&pesan=berhasil");
    //     } else {
    //         die("ERROR : " . mysqli_error($conn));
    //     }
    // }
}

if (isset($_POST['submit1'])) {

    $pwd = md5($_POST['pwd']);

    $cek1 = "SELECT * FROM adm WHERE admid='1'";
    $sql1 = mysqli_query($conn, $cek1);

    if ($sql1) {
        $query1 = mysqli_query($conn, "UPDATE adm SET pwd = '$pwd' where admid='1'");
        if ($query1) {
            header("location:../home.php?p=data_stats");
        } else {
            die("ERROR : " . mysqli_error($conn));
        }
    }
}
