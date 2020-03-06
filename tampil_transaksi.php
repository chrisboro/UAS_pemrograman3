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
		<td>
		<li><a href="laporan_trans.php">laporan transaksi</a></li>
		</td>
<tr>
<th><i class="icon-signal"></i>id_transaksi</th>
<th><i class="icon-signal"></i>nama_transaksi</th>
<th><i class="icon-signal"></i>tanggal_transaksi</th>
<th><i class="icon-signal"></i>harga</th>
<th><i class="icon-signal"></i>quantity</th>
<th><i class="icon-signal"></i>id_barang</th>
<th><i class="icon-signal"></i>barang</th>
<th><i class="icon-signal"></i>kategori</th>
<th><i class="icon-signal"></i>satuan</th>
</tr>
</head>
<body>
<?php
include('kon.php');
$d = mysqli_query($a,"select d.Id_transaksi,d.nama_transaksi,d.tgl_transaksi,d.harga,d.qty,c.Id_barang,c.nama_barang,a.nama_satuan,b.nama_kategori from transaksi as d 
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
	<td><?php echo $r['Id_transaksi'];?></td>
	<td><?php echo $r['nama_transaksi'];?></td>
	<td><?php echo $r['tgl_transaksi'];?></td>
	<td><?php echo $r['harga'];?></td>
	<td><?php echo $r['qty'];?></td>
	<td><?php echo $r['Id_barang'];?></td>
	<td><?php echo $r['nama_barang'];?></td>
	<td><?php echo $r['nama_kategori'];?></td>
	<td><?php echo $r['nama_satuan'];?></td>
<?php } 
?>
</tr>
</table>