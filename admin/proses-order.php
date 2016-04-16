<?php
include"../koneksi.php";
$update=mysql_query("update transaksi set status_order='sukses' where id_transaksi='$_GET[id]'");
header('location:transaksi.php');
?>