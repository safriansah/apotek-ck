<div class="txttit">
	Data Obat
	<div class="txtadd">
		<input type="button" id="btnadd" value="Add Data" onclick="frm('obt')">
	</div>
	<hr>
</div>
<div class="kotak" style="overflow-x:auto;">
	<input type="text" placeholder="Pencarian Berdasarkan Kode dan Nama Obat" id="txtcari" style="width:75%;" <?php if($_GET["q"]) echo"value='".$_GET["q"]."'";?>>
	<input type="button" id="btncari" value="Search" onclick="cari('obt')">
</div>
<div class="kotable">
<table style="clear:both;width:100%;">
	<tr>
		<th>Kode Obat</th>
		<th>Nama</th>
		<th>Jenis Obat</th>
		<th>Kategori Obat</th>
		<th>Harga</th>
		<th>Stock</th>
		<th>Expired</th>
		<th>Keterangan</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	include"../../act/kon.php";

	$q="";
	if($_GET["q"]) $q="where KODE_OBAT like '%".$_GET["q"]."%' or NAMA like '%".$_GET["q"]."%'";

	$no=0;
	$txtquery="select * from OBAT ".$q." order by KODE_OBAT asc";
	$query=$conn->query($txtquery);//$result = mysql_query($query);
	while($data=$query->fetch_assoc()){
	?>
	<tr>
		<td style="text-align:center;"><?php	echo $data["KODE_OBAT"]; ?></td>
		<td style="text-align:center;"><?php echo $data["NAMA"]; ?></td>
		<td style="text-align:center;"><?php echo $data["JENIS_OBAT"]; ?></td>
		<td style="text-align:center;"><?php echo $data["KATEGORI_OBAT"]; ?></td>
		<td style="text-align:center;">Rp. <?php echo $data["HARGA"]; ?></td>
		<td style="text-align:center;"><?php echo $data["STOCK"]; ?></td>
		<td style="text-align:center;"><?php echo $data["EXP"]; ?></td>
		<td style="text-align:center;"><?php echo $data["KETERANGAN"]; ?></td>
		<td style="text-align:center;"><input type="button" value="Delete" onclick="del('<?php echo $data["KODE_OBAT"]; ?>','obt')"></td>
		<td style="text-align:center;"><input type="button" value="Update" onclick="upd('<?php echo $data["KODE_OBAT"]; ?>','obt')"></td>
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
