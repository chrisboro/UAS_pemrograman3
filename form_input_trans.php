<html>
<body>
<form action="input_trans.php" method="post">		
		<table>
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
		<li><a href="laporan_trans.php">laporan transaksi</a></li>
		</td>
			<tr>
				<td>Id transaksi</td>
				<td><input type="text" name="a"></td>					
			</tr>	
			<tr>
				<td>nama_transaksi</td>
				<td><input type="text" name="b"></td>					
			</tr>
			<tr>
				<td>tgl_transaksi</td>
				<td><input type="date" name="c"></td>					
			</tr>		
			<tr>
				<td>harga</td>
				<td><input type="text" name="d"></td>
			</tr>			
			<tr>
				<td>qty</td>
				<td><input type="text" name="e"></td>					
			</tr>
			<tr>
				<td>id_barang</td>
				<td><input type="text" name="f"></td>					
			</tr>
			<tr>
				<td>simpan</td>
				<td><input type="submit" value="simpan"></td>					
			</tr>
		</table>
</form>
</body>
</html>