Tambah Data Pelanggan
<hr>
<table>
	<tr class="border">
		<td>ID Pelanggan</td>
		<td>: <input type="text" id="1" maxlength="10" placeholder="xxxxxxxxxx"></td>
	</tr>
	<tr class="border">
		<td>Nama</td>
		<td>: <input type="text" id="2" maxlength="20" placeholder="Nama Pelanggan"></td>
	</tr>
	<tr class="border">
		<td>Gender</td>
		<td>:
			<select id="3">
				<option value="">--Pilih--</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</td>
	</tr>
	<tr class="border">
		<td>Tanggal Lahir</td>
		<td>: <input type="date" id="4" placeholder="yyyy-mm-dd"></td>
	</tr>
	<tr class="border">
		<td>Alamat</td>
		<td>: <input type="text" id="5" maxlength="32" placeholder="Alamat"></td>
	</tr>
	<tr class="border">
		<td>Kota</td>
		<td>: <input type="text" id="6" maxlength="16" placeholder="Kota"></td>
	</tr>
	<tr class="border">
		<td>Telpon</td>
		<td>: <input type="tel" id="7" maxlength="16" placeholder="Nomor Telpon"></td>
	</tr>
	<tr class="border">
		<td>Email</td>
		<td>: <input type="email" id="8" maxlength="32" placeholder="Email"></td>
	</tr>
</table>
<hr>
<table>
	<tr class="border">
		<td>
			<input type="button" value="Kembali" onclick="view('pel')">
		</td>
		<td style="text-align:right;">
			<input type="button" value="Simpan" id="simpan" onclick="simp('add','pel')">
		</td>
	</tr>
</table>
