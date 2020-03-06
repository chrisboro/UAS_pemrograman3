<table>
<head>
		<td>
		<li><a href="form_input_brg.php">Master Barang</a></li>
		</td>
		<td>
		<li><a href="tampil_barang.php">Tampil barang</a></li>
		</td>
		<td>
		<li><a href="form_input_kategori.php">Master Kategori</a></li>
		</td>
		<td>
		<li><a href="tampil_kategori.php">Tampil Kategori</a></li>
		</td>
		<td>
		<li><a href="form_input_satuan.php">Master Satuan</a></li>
		</td>
		<td>
		<li><a href="tampil_satuan.php">Tampil Satuan</a></li>
		</td>
		<td>
		<li><a href="form_input_trans.php">Master Transaksi</a></li>
		</td>
<tr>
<td>kategori</td>
<td>nama barang</td>
<td>qty</td>
<td>harga</td>
<td>total</td>
</tr>
</head>
<body>
<?php
include('kon.php');
$d = mysqli_query($a,"select b.nama_kategori,c.nama_barang,d.qty,d.harga,d.harga*qty as total from transaksi as d 
join barang as c 
join satuan as a 
join kategori as b 
where d.Id_barang = c.Id_barang and c.Id_kategori=b.Id_kategori
and c.Id_satuan=a.Id_satuan order by Id_transaksi asc");
?>
<?php
while($r =mysqli_fetch_array($d)){
?>
<tr>	
	<td><?php echo $r['nama_kategori'];?></td>
	<td><?php echo $r['nama_barang'];?></td>
	<td><?php echo $r['qty'];?></td>
	<td><?php echo $r['harga'];?></td>
	<td><?php echo $r['total'];?></td>
<?php } 
?>
</tr>
</table>