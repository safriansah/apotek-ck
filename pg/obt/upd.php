<?php
include"../../act/kon.php";
$q="where KODE_OBAT='".$_GET["q"]."'";
$txtquery="select * from OBAT ".$q."";
$query=$conn->query($txtquery);
$row=$query->fetch_assoc();
$jenis=array("Bubuk","Drase","Kapsul","Pil","Sirup","Tablet");
$cj=count($jenis);
$kat=array('Obat Bebas','Obat Bebas Terbatas','Obat Keras');
$ck=count($kat);
?>
Update Data Obat
<hr>
<table>
	<tr class="border">
		<td>Kode Obat</td>
		<td>:</td>
		<td><input type="text" readonly value="<?php echo $row["KODE_OBAT"]; ?>" id="1" maxlength="4" placeholder="xxxx"></td>
	</tr>
	<tr class="border">
		<td>Nama</td>
		<td>:</td>
		<td><input maxlength="20" type="text" value="<?php echo $row["NAMA"]; ?>" id="2" placeholder="Nama Obat"></td>
	</tr>
	<tr class="border">
		<td>Jenis Obat</td>
		<td>:</td>
		<td>
			<select id="3">
				<option value="">--Pilih--</option>
				<?php
					for ($i=0; $i < $cj; $i++) {
						$sel="";
						if($jenis[$i]==$row["JENIS_OBAT"]) $sel="selected";
						echo "<option value='".$jenis[$i]."'".$sel.">".$jenis[$i]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Kategori Obat</td>
		<td>:</td>
		<td>
			<select id="4">
				<option value="">--Pilih--</option>
				<?php
					for ($i=0; $i < $ck; $i++) {
						$sel="";
						if($kat[$i]==$row["KATEGORI_OBAT"]) $sel="selected";
						echo "<option value='".$kat[$i]."'".$sel.">".$kat[$i]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Harga</td>
		<td>:</td>
		<td><input type="number" value="<?php echo $row["HARGA"]; ?>" id="5" placeholder="Harga Satuan Rp."></td>
	</tr>
	<tr class="border">
		<td>Stock</td>
		<td>:</td>
		<td><input type="number" value="<?php echo $row["STOCK"]; ?>" id="6" placeholder="Stok Obat"></td>
	</tr>
	<tr class="border">
		<td>Expired</td>
		<td>:</td>
		<td><input type="date" value="<?php echo $row["EXP"]; ?>" id="7" placeholder="yyyy-mm-dd"></td>
	</tr>
	<tr class="border">
		<td>Keterangan</td>
		<td>:</td>
		<td><textarea id="8" placeholder="Keterangan"><?php echo $row["KETERANGAN"]; ?></textarea></td>
	</tr>
</table>
<hr>
<table>
	<tr class="border">
		<td>
			<input type="button" value="Kembali" onclick="view('obt')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('upd','obt')">
		</td>
	</tr>
</table>
