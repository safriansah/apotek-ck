Sistem Informasi Apotek
<?php
include"../act/kon.php";

$trans="select count(*) as jum from TRANSAKSI";
$obat="select count(*) as jum from OBAT";
$peg="select count(*) as jum from PEGAWAI";
$pel="select count(*) as jum from PELANGGAN";

$query=$conn->query($trans);
$d=$query->fetch_assoc();

$query=$conn->query($obat);
$da=$query->fetch_assoc();

$query=$conn->query($peg);
$dat=$query->fetch_assoc();

$query=$conn->query($pel);
$data=$query->fetch_assoc();
?>
<hr>
<div class="k2" onclick="view('obt')">
  <div class="k2logo">
    O
  </div>
  <div class="k2txt">
    Data Obat, Terdapat Total <?php echo $da['jum']; ?> Data
  </div>
</div>
<div class="k2" onclick="view('pel')">
  <div class="k2logo">
    Pl
  </div>
  <div class="k2txt">
    Data Pelanggan, Terdapat Total <?php echo $data['jum']; ?> Data
  </div>
</div>
<div class="k2" onclick="view('pgw')">
  <div class="k2logo">
    Pg
  </div>
  <div class="k2txt">
    Data Pegawai, Terdapat Total <?php echo $dat['jum']; ?> Data
  </div>
</div>
<div class="k2" onclick="view('trn')">
  <div class="k2logo">
    T
  </div>
  <div class="k2txt">
    Data Transaksi, Terdapat Total <?php echo $d['jum']; ?> Data
  </div>
</div>
