<?php 
include('kon.php');
$sat=$_POST['a'];
$nm_sat=$_POST['b'];
mysqli_query($a,"INSERT INTO satuan values('$sat','$nm_sat')");
header("location:tampil_satuan.php");
?>