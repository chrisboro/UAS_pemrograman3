<table>
<head>
		<td>
		<li><a href="form_input_brg.php">Master Barang</a></li>
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
		<li><a href="form_input_trans.php">Master transaksi</a></li>
		</td>
		<td>
		<li><a href="laporan_trans.php">laporan transaksi</a></li>
		</td>
<tr>
<th><i class="icon-signal"></i>id_barang</th>
<th><i class="icon-signal"></i>nama_barang</th>
<th><i class="icon-signal"></i>kategori</th>
<th><i class="icon-signal"></i>satuan</th>
</tr>
</head>
<body>
<?php
include('kon.php');
$d = mysqli_query($a,"SELECT Id_barang,nama_barang,a.nama_satuan,b.nama_kategori from barang as c join kategori as b join satuan as a where a.Id_satuan=c.Id_satuan and  c.Id_kategori=b.Id_kategori 
order by Id_barang asc");
?>
<?php
while($r =mysqli_fetch_array($d)){
?>
<tr>	
	<td><?php echo $r['Id_barang'];?></td>
	<td><?php echo $r['nama_barang'];?></td>
	<td><?php echo $r['nama_kategori'];?></td>
	<td><?php echo $r['nama_satuan'];?></td>
<?php } 
?>
</tr>
</table>