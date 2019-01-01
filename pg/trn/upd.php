<?php
include"../../act/kon.php";
$q="where ID_TANS='".$_GET["q"]."'";
$txtquery="select * from TRANSAKSI ".$q."";
$query=$conn->query($txtquery);
$row=$query->fetch_assoc();

$qobt="select * from OBAT order by KODE_OBAT asc";
$qpel="select * from PELANGGAN order by ID_PEL asc";
$qnip="select * from PEGAWAI order by NIP asc";
?>
Update Data Transaksi
<hr>
<table>
	<tr class="border">
		<td>ID Transaksi</td>
		<td>:</td>
		<td><input type="text" id="1" readonly value="<?php echo $row["ID_TANS"]; ?>" maxlength="8" placeholder="xxxxxxxxx"></td>
	</tr>
	<tr class="border">
		<td>Nip</td>
		<td>:</td>
		<td>
			<select id="2">
				<option value="">--Pilih--</option>
				<?php
					$query=$conn->query($qnip);
					while($data=$query->fetch_assoc()){
						$sel="";
						if($data["NIP"]==$row["NIP"])$sel="selected";
						echo "<option value='".$data["NIP"]."' ".$sel.">".$data["NIP"]."-".$data["NAMA"]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Kode Obat</td>
		<td>:</td>
		<td>
			<select id="3" onchange="optkd()">
				<option value="">--Pilih--</option>
				<?php
					$query=$conn->query($qobt);
					while($data=$query->fetch_assoc()){
						$sel="";
						if($data["KODE_OBAT"]==$row["KODE_OBAT"])$sel="selected";
						echo "<option value='".$data["KODE_OBAT"]."' ".$sel.">".$data["KODE_OBAT"]."-".$data["NAMA"]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td></td>
		<td></td>
		<td><input type="number" id="harga" placeholder="harga" readonly></td>
	</tr>
	<tr class="border">
		<td></td>
		<td></td>
		<td><input type="number" id="stock" placeholder="stok" readonly></td>
	</tr>
	<tr class="border">
		<td>ID Pelanggan</td>
		<td>:</td>
		<td>
			<select id="4">
				<option value="">--Pilih--</option>
				<?php
					$query=$conn->query($qpel);
					while($data=$query->fetch_assoc()){
						$sel="";
						if($data["ID_PEL"]==$row["ID_PEL"])$sel="selected";
						echo "<option value='".$data["ID_PEL"]."' ".$sel.">".$data["ID_PEL"]."-".$data["NAMA"]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Tanggal</td>
		<td>:</td>
		<td><input type="date" id="5" placeholder="yyyy-mm-dd" value="<?php echo $row["TGL"]; ?>"></td>
	</tr>
	<tr class="border">
		<td>Jumlah</td>
		<td>:</td>
		<td oninput="optjum()"><input type="number" id="6" placeholder="Jumlah Obat Yang Dibeli" value="<?php echo $row["JUMLAH"]; ?>"></td>
	</tr>
	<tr class="border">
		<td>Total</td>
		<td>:</td>
		<td><input type="number" readonly id="7" placeholder="Total Yang Harus Dibayar" value="<?php echo $row["TOTAL_BAYAR"]; ?>"></td>
	</tr>
	<tr class="border">
		<td>Keterangan</td>
		<td>:</td>
		<td><textarea id="8" placeholder="Keterangan"><?php echo $row["KET"]; ?></textarea></td>
	</tr>
</table>
<hr>
<table>
	<tr class="border">
		<td>
			<input type="button" value="Kembali" onclick="view('trn')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('upd','trn')">
		</td>
	</tr>
</table>
