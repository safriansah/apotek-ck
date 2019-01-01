<?php
include"../kon.php";

$kode=$_POST["kode"];

$query="delete from TRANSAKSI where ID_PEL='".$kode."'";
$hasil=$conn->prepare($query);
$hasil->execute();

$query="delete from PELANGGAN where ID_PEL='".$kode."'";
$hasil2=$conn->prepare($query);
$hasil2->execute();

if($hasil2)echo"Data Berhasil Dihapus";
else echo"Data Gagal Dihapus, Periksa Koneksi Anda";
?>
