<?php
include"../kon.php";

$kode=$_POST["kode"];

$query="delete from TRANSAKSI where ID_TANS='".$kode."'";

$hasil=$conn->prepare($query);
$hasil->execute();

if($hasil)echo"Data Berhasil Dihapus";
else echo"Data Gagal Dihapus, Periksa Koneksi Anda";
?>
