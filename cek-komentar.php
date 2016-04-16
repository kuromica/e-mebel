<?php
include "koneksi.php";
$id=$_POST['id_produk'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$insert = mysql_query("INSERT INTO komentar(id_produk,nama,email,komentar) VALUES ('$id','$nama','$email','$komentar')");
header('location:detail.php?id='.$id)
?>