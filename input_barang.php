<?php 
include('kon.php');
$kat=$_POST['a'];
$nm_brg=$_POST['b'];
$id_kat=$_POST['c'];
$id_sat=$_POST['d'];
if ($id_kat==null OR $id_sat==null)
{
echo "silahkan isi ID KATEGORI DAN ID SATUAN LEBIH DULU";
}
else
{mysqli_query($a,"INSERT INTO barang values('$kat','$nm_brg','$id_kat','$id_sat')");
header("location:tampil_barang.php");}
?>
