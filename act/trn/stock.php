<?php
include"../kon.php";
$txtquery="select * from OBAT where KODE_OBAT='".$_GET["q"]."'" ;
$query=$conn->query($txtquery);
$data=$query->fetch_assoc();
echo $data["STOCK"];
?>
