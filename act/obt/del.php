<?php
include"../kon.php";

$kode=$_POST["kode"];

$query="delete from TRANSAKSI where KODE_OBAT='".$kode."'";
$hasil=$conn->prepare($query);
$hasil->execute();

$query="delete from OBAT where KODE_OBAT='".$kode."'";
$hasil2=$conn->prepare($query);
$hasil2->execute();

if($hasil2)echo"Data Berhasil Dihapus";
else echo"Data Gagal Dihapus, Periksa Koneksi Anda";
?>
