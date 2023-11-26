<?php
session_start();
$dbname      = "oaustech";
$dbusername ="root";
$dbpassword = "";
$dbhost = "localhost";

$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

?>