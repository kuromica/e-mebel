<?php
include"koneksi.php";
$update=mysql_query("delete from transaksi where id_transaksi='$_GET[id]'");
header('location:cart.php');
?>