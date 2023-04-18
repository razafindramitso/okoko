<?php
$mysqli = mysqli_connect("localhost","root","","js");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>