Tambah Data Obat
<hr>
<table>
	<tr class="border">
		<td>Kode Obat</td>
		<td>:</td>
		<td><input type="text" id="1" maxlength="4" placeholder="xxxx"></td>
	</tr>
	<tr class="border">
		<td>Nama</td>
		<td>:</td>
		<td><input maxlength="20" type="text" id="2" placeholder="Nama Obat"></td>
	</tr>
	<tr class="border">
		<td>Jenis Obat</td>
		<td>:</td>
		<td>
			<select id="3">
				<option value="">--Pilih--</option>
				<option value="Bubuk">Bubuk</option>
				<option value="Drase">Drase</option>
				<option value="Kapsul">Kapsul</option>
				<option value="Pil">Pil</option>
				<option value="Sirup">Sirup</option>
				<option value="Tablet">Tablet</option>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Kategori Obat</td>
		<td>:</td>
		<td>
			<select id="4">
				<option value="">--Pilih--</option>
				<option value="Obat Bebas">Obat Bebas</option>
				<option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
				<option value="Obat Keras">Obat Keras</option>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Harga</td>
		<td>:</td>
		<td><input type="number" id="5" placeholder="Harga Satuan Rp."></td>
	</tr>
	<tr class="border">
		<td>Stock</td>
		<td>:</td>
		<td><input type="number" id="6" placeholder="Stok Obat"></td>
	</tr>
	<tr class="border">
		<td>Expired</td>
		<td>:</td>
		<td><input type="date" id="7" placeholder="yyyy-mm-dd"></td>
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
			<input type="button" value="Kembali" onclick="view('obt')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('add','obt')">
		</td>
	</tr>
</table>
