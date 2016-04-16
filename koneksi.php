<?php
$host="ap-cdbr-azure-southeast-b.cloudapp.net";
$username="b1ab17131ec8db";
$password="4e3ef72f";
$database="e-mebel";
$connect=mysql_connect($host,$username,$password)or die ("Gagalterkoneksi");
$koneksi=mysql_select_db($database,$connect)or die("Gagal terkoneksi ke database");
?>
