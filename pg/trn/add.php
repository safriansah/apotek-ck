<?php
include"../../act/kon.php";

$qobt="select * from OBAT where STOCK>0 order by KODE_OBAT asc";
$qpel="select * from PELANGGAN order by ID_PEL asc";
$qnip="select * from PEGAWAI order by NIP asc";
?>
Tambah Data Transaksi
<hr>
<table>
	<tr class="border">
		<td>ID Transaksi</td>
		<td>:</td>
		<td><input type="text" id="1" maxlength="8" placeholder="xxxxxxxxx"></td>
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
						echo "<option value='".$data["NIP"]."'>".$data["NIP"]." - ".$data["NAMA"]."</option>";
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
						echo "<option value='".$data["KODE_OBAT"]."'>".$data["KODE_OBAT"]." - ".$data["NAMA"]."</option>";
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
						echo "<option value='".$data["ID_PEL"]."'>".$data["ID_PEL"]." - ".$data["NAMA"]."</option>";
					}
				?>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Tanggal</td>
		<td>:</td>
		<td><input type="date" id="5" readonly value="<?php echo date("Y-m-d"); ?>" placeholder="yyyy-mm-dd"></td>
	</tr>
	<tr class="border">
		<td>Jumlah</td>
		<td>:</td>
		<td oninput="optjum()"><input type="number" id="6" placeholder="Jumlah Obat Yang Dibeli"></td>
	</tr>
	<tr class="border">
		<td>Total</td>
		<td>:</td>
		<td><input type="number" id="7" readonly placeholder="Total Yang Harus Dibayar"></td>
	</tr>
	<tr class="border">
		<td>Keterangan</td>
		<td>:</td>
		<td><textarea id="8" placeholder="Keterangan"></textarea></td>
	</tr>
</table>
<hr>
<table>
	<tr class="border">
		<td>
			<input type="button" value="Kembali" onclick="view('trn')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('add','trn')">
		</td>
	</tr>
</table>
