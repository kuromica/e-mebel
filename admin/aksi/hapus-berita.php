<?php
include "../../koneksi.php";
$delete=mysql_query("delete from berita where id_berita='$_GET[id]'");
header('location:../berita.php');
?>