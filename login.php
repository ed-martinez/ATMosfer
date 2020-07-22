<?php

$usr = $_POST['usr'];
$pwd = hash('sha256',$_POST['pwd']);

$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "ATMOSFER";

$conn = mysqli_connect($host, $dbuser, $dbpwd, $db);
if(!$conn) {
	die("Connection failed" . mysqli_connect_error());
}
echo "Connection successfully";
mysqli_close($conn);
?>