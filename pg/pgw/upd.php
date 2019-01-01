<?php
include"../../act/kon.php";
$q="where NIP='".$_GET["q"]."'";
$txtquery="select * from PEGAWAI ".$q."";
$query=$conn->query($txtquery);
$row=$query->fetch_assoc();
?>
Update Pegawai
<hr>
<table>
	<tr class="border">
		<td>NIP</td>
		<td>: <input readonly value="<?php echo $row['NIP']; ?>" type="text" id="1" maxlength="10" placeholder="xxxxxxxxxx"></td>
	</tr>
	<tr class="border">
		<td>Nama</td>
		<td>: <input value="<?php echo $row['NAMA']; ?>" type="text" id="2" maxlength="20" placeholder="Nama Pegawai"></td>
	</tr>
	<tr class="border">
		<td>Gender</td>
		<td>:
			<select id="3">
				<option value="">--Pilih--</option>
				<option value="Laki-Laki" <?php if($row['JENIS_KEL']=="Laki-Laki")echo "selected"; ?>>Laki-Laki</option>
				<option value="Perempuan" <?php if($row['JENIS_KEL']=="Perempuan")echo "selected"; ?>>Perempuan</option>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Tanggal Lahir</td>
		<td>: <input type="date" value="<?php echo $row['TGL_LAHIR']; ?>" id="4" placeholder="yyyy-mm-dd"></td>
	</tr>
	<tr class="border">
		<td>Alamat</td>
		<td>: <input maxlength="32" type="text" value="<?php echo $row['ALAMAT']; ?>" id="5" placeholder="Alamat"></td>
	</tr>
	<tr class="border">
		<td>Kota</td>
		<td>: <input type="text" maxlength="16" value="<?php echo $row['KOTA']; ?>" id="6" placeholder="Kota"></td>
	</tr>
	<tr class="border">
		<td>Telpon</td>
		<td>: <input type="tel" maxlength="16" id="7" value="<?php echo $row['TELP']; ?>" placeholder="Nomor Telpon"></td>
	</tr>
	<tr class="border">
		<td>Email</td>
		<td>: <input maxlength="32" type="email" id="8" placeholder="Email" value="<?php echo $row['EMAIL']; ?>"></td>
	</tr>
</table>
<div class="kotak">
<hr>
<table>
	<tr class="border">
		<td>
			<input type="button" value="Kembali" onclick="view('pgw')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('upd','pgw')">
		</td>
	</tr>
</table>
