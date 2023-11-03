<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include '../vd/validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usid = $_POST['usid'];
    $prize = $_POST['prize'];
    $response = '';
    $date = date("Y-m-d h:i:sa");

    $data = mysqli_query($conn, "SELECT * FROM uvc WHERE usid='$usid' AND prize > 0");
    $cek = mysqli_num_rows($data);



    if ($cek) {
        $response = json_encode(['status' => 'e', 'message' => 'Maaf, anda tidak dapat bermain lagi']);
        unset($_SESSION["unme"]);
        echo $response;
        return;
        session_destroy();
    } else {
        $data1 = mysqli_query($conn, "UPDATE uvc SET prize='$prize', stats=1, ply='$date' WHERE usid='$usid'");
        $response = json_encode(['status' => 's', 'message' => 'Penyimpanan berhasil']);
        echo $response;
        return;
    }
    session_destroy();
}
