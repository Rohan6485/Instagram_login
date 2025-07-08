<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "Alumine";
$coon=mysqli_connect($host, $user, $password, $database);
if ($coon){
	echo "";
}
else{
	echo "Not Connected";
}
?>