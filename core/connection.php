<?php
ob_start();
$con=mysqli_connect("168.144.85.195","nalo","msyWE546","wisdomseed");
// $con=mysqli_connect("localhost","root","","dlr");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>