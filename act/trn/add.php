<?php
include"../kon.php";

$tabel="TRANSAKSI";
$d1=$_POST["0"];
$d2=$_POST["1"];
$d3=$_POST["2"];
$d4=$_POST["3"];
$d5=$_POST["4"];
$d6=$_POST["5"];
$d7=$_POST["6"];
$d8=$_POST["7"];

if($_GET["q"]=="add"){
  $query="insert into ".$tabel." values('".$d1."','".$d2."','".$d3."','".$d4."','".$d5."','".$d6."','".$d7."','".$d8."')";
}
elseif($_GET["q"]=="upd"){
  $query="update ".$tabel." set NIP='".$d2."', KODE_OBAT='".$d3."', ID_PEL='".$d4."', TGL='".$d5."', JUMLAH='".$d6."', TOTAL_BAYAR='".$d7."', KET='".$d8."' WHERE ID_TANS='".$d1."'";
}

$hasil=$conn->prepare($query);
$hasil->execute();

if($hasil)echo"Data Berhasil Disimpan";
else echo"Data Gagal Disimpan, Periksa Koneksi Anda";
?>
