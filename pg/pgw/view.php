<div class="txttit">
	Data Pegawai
	<div class="txtadd">
		<input type="button" id="btnadd" value="Add Data" onclick="frm('pgw')">
	</div>
	<hr>
</div>
<div class="kotak" style="overflow-x:auto;">
	<input type="text" placeholder="Pencarian Berdasarkan NIP, Nama Pegawai, Nomor Telpon, dan Alamat Email" id="txtcari" style="width:75%;" <?php if($_GET["q"]) echo"value='".$_GET["q"]."'";?>>
	<input type="button" id="btncari" value="Search" onclick="cari('pgw')">
</div>
<div class="kotable">
<table style="clear:both;width:100%;">
	<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>Telpon</th>
		<th>Email</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	include"../../act/kon.php";

	$q="";
	if($_GET["q"]) $q="where NAMA like '%".$_GET["q"]."%' or NIP like '%".$_GET["q"]."%' or ALAMAT like '%".$_GET["q"]."%' or KOTA like '%".$_GET["q"]."%' or TELP like '%".$_GET["q"]."%' or EMAIL like '%".$_GET["q"]."%'";

	$no=0;
	$txtquery="select * from PEGAWAI ".$q." order by NIP asc";
	$query=$conn->query($txtquery);//$result = mysql_query($query);
	while($data=$query->fetch_assoc()){
	?>
	<tr>
		<td style="text-align:center"><?php	echo $data["NIP"]; ?></td>
		<td style="text-align:center"><?php echo $data["NAMA"]; ?></td>
		<td style="text-align:center"><?php echo $data["JENIS_KEL"]; ?></td>
		<td style="text-align:center"><?php echo $data["TGL_LAHIR"]; ?></td>
		<td style="text-align:center"><?php echo $data["ALAMAT"]; ?></td>
		<td style="text-align:center"><?php echo $data["KOTA"]; ?></td>
		<td style="text-align:center"><?php echo $data["TELP"]; ?></td>
		<td style="text-align:center"><?php echo $data["EMAIL"]; ?></td>
		<td style="text-align:center"><input type="button" value="Delete" onclick="del('<?php echo $data["NIP"]; ?>','pgw')"></td>
		<td style="text-align:center"><input type="button" value="Update" onclick="upd('<?php echo $data["NIP"]; ?>','pgw')"></td>
	</tr>
	<?php
	$no++;
	}
	if($no<1){
	if($_GET["q"])$kosong="Data Tidak Ditemukan";
	else $kosong="Data Kosong";
	?>
	<tr>
		<td style="text-align:center;padding:8px;" colspan="10"><?php echo $kosong; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
