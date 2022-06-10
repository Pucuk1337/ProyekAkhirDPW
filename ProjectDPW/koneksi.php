<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "trendscrud";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$query = "SELECT * FROM product";
$result_product = mysqli_query($conn, $query);
if(!$conn){
	echo "gagal konek database menn";
} else {
	
};

?>