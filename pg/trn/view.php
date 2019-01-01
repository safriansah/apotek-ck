<div class="txttit">
	Data Transaksi
	<div class="txtadd">
		<input type="button" id="btnadd" value="Add Data" onclick="frm('trn')">
	</div>
	<hr>
</div>
<div class="kotak" style="overflow-x:auto;">
	<input type="text" placeholder="Pencarian Berdasarkan ID Transaksi, NIP, Kode Obat, dan ID Pelanggan" id="txtcari" style="width:75%;" <?php if($_GET["q"]) echo"value='".$_GET["q"]."'";?>>
	<input type="button" id="btncari" value="Search" onclick="cari('trn')">
</div>
<div class="kotable">
<table style="clear:both;width:100%;">
	<tr>
		<th>ID Transaksi</th>
		<th>NIP</th>
		<th>Kode Obat</th>
		<th>ID Pelanggan</th>
		<th>Tanggal Beli</th>
		<th>Jumlah</th>
		<th>Total</th>
		<th>Keterangan</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	include"../../act/kon.php";

	$q="";
	if($_GET["q"]) $q="where ID_TANS like '%".$_GET["q"]."%' or NIP like '%".$_GET["q"]."%' or KODE_OBAT like '%".$_GET["q"]."%' or ID_PEL like '%".$_GET["q"]."%'";

	$no=0;
	$txtquery="select * from TRANSAKSI ".$q." order by ID_TANS asc";
	$query=$conn->query($txtquery);
	while($data=$query->fetch_assoc()){
	?>
	<tr>
		<td style="text-align:center;"><?php	echo $data["ID_TANS"]; ?></td>
		<td style="text-align:center;"><?php echo $data["NIP"]; ?></td>
		<td style="text-align:center;"><?php echo $data["KODE_OBAT"]; ?></td>
		<td style="text-align:center;"><?php echo $data["ID_PEL"]; ?></td>
		<td style="text-align:center;"><?php echo $data["TGL"]; ?></td>
		<td style="text-align:center;"><?php echo $data["JUMLAH"]; ?></td>
		<td style="text-align:center;">Rp. <?php echo $data["TOTAL_BAYAR"]; ?></td>
		<td style="text-align:center;"><?php echo $data["KET"]; ?></td>
		<td style="text-align:center;"><input type="button" value="Delete" onclick="del('<?php echo $data["ID_TANS"]; ?>','trn')"></td>
		<td style="text-align:center;"><input type="button" value="Update" onclick="upd('<?php echo $data["ID_TANS"]; ?>','trn')"></td>
	</tr>
	<?php
	$no++;
	}
	if($no<1){
	if($_GET["q"])$kosong="Data Tidak Ditemukan";
	else $kosong="Data Kosong";
	?>
	<tr>
		<td colspan="10" style="text-align:center;padding:8px;"><?php echo $kosong; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
