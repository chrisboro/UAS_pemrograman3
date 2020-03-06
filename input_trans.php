<?php 
include('kon.php');
$trx=$_POST['a'];
$nm_trx=$_POST['b'];
$tgl_trx=$_POST['c'];
$hrg=$_POST['d'];
$qty=$_POST['e'];
$idb=$_POST['f'];
if ($idb=="")
{echo "ID barang tidak boleh kosong";}
else{
mysqli_query($a,"INSERT INTO transaksi values('$trx','$nm_trx','$tgl_trx','$hrg','$qty','$idb')");
header("location:tampil_transaksi.php");}
?>