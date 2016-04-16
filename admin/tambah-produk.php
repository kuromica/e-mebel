<?php
include "../koneksi.php";
$nama=$_POST['nama'];
$keterangan=$_POST['keterangan'];
$harga=$_POST['harga'];
$suplier=$_POST['suplier'];
$tanggal=date('Y-m-d');

include "SimpleImage.php";
$file = $_FILES['foto']['tmp_name'];
$image = new SimpleImage();
$image->load($file);
$image->resize(250,200);
$image->save("../images/".$_FILES['foto']['name']);
$foto=basename($_FILES['foto']['name']);

$insert = mysql_query("INSERT INTO produk(id_suplier,nama,keterangan,foto,harga,oleh,tanggal) values
	('$suplier','$nama','$keterangan','$foto','$harga','admin','$tanggal')");
echo "<script>alert('Sukses')</script>";
header('location:produk.php');
?>