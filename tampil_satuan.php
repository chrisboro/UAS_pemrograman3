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
		<li><a href="form_input_trans.php">Master transaksi</a></li>
		</td>
		<td>
		<li><a href="laporan_trans.php">laporan transaksi</a></li>
		</td>
<tr>
<th><i class="icon-signal"></i>id_kategori</th>
<th><i class="icon-signal"></i>nama_kategori</th>
</tr>
</head>
<body>
<?php
include('kon.php');
$d = mysqli_query($a,"SELECT * from satuan");
?>
<?php
while($r =mysqli_fetch_array($d)){
?>
<tr>	
	<td><?php echo $r['Id_satuan'];?></td>
	<td><?php echo $r['nama_satuan'];?></td>
<?php } 
?>
</tr>
</table>