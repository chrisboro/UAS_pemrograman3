<?php 
include('kon.php');
$kat=$_POST['a'];
$nm_kategori=$_POST['b'];
mysqli_query($a,"INSERT INTO kategori values('$kat','$nm_kategori')");
header("location:tampil_kategori.php");
?>