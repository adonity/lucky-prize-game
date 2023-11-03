<?php 
session_start();
session_destroy();

include '../vd/validation.php';
 
$sql = "UPDATE uvc SET k_voucher='' WHERE usid='$usid'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
 
?>