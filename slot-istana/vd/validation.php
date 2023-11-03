<?php
$servername = "localhost";
$db_name = "istana_slt_db";
$s_name = "root";
$s_password = "";
// $servername = "localhost";
// $db_name = "istana_slt_db";
// $s_name = "istana_xyzsu";
// $s_password = "HokiS3lalu@";

$conn = mysqli_connect($servername, $s_name, $s_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
