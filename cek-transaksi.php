<?php
include "koneksi.php";
$id = $_GET['id'];
$username = $_COOKIE['username'];
$getProduk = mysql_query("select * from produk where id='$id'");
$produk = mysql_fetch_array($getProduk);
$tanggal = date('Y-m-d');
$insert = mysql_query("INSERT INTO transaksi (id_produk,username,harga,status_order,tanggal) VALUES ('1','firman','90000','-','2013-03-03')");
//header('location:cart.php');
echo "berhasil";
?>
