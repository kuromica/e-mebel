<?php
$host="localhost";
$username="root";
$password="";
$database="e-mebel";
$connect=mysql_connect($host,$username,$password)or die ("Gagalterkoneksi");
$koneksi=mysql_select_db($database,$connect)or die("Gagal terkoneksi ke database");
?>
