<?php
include "../koneksi.php";
$delete = mysql_query("DELETE FROM user WHERE username='$_GET[username]'");
echo "<script>alert('Sukses')</script>";
header('location:user.php');
?>