<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['penerima'];
$alamat=$_POST['alamat'];
$insert = mysql_query("UPDATE transaksi set status_order='pending',nama_penerima='$nama', alamat_pengiriman='$alamat' where id_transaksi='$id'");
header('location:cart.php');
?>