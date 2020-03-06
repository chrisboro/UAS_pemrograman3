<?php 
$a = mysqli_connect("localhost","root","","uas");
 if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}