<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$nama=$_POST['nama_lengkap'];
$alamat=$_POST['alamat'];
$cekuser=mysql_query("select * from user where username='$username'");
$array=mysql_fetch_array($cekuser);
$periksa=mysql_num_rows($cekuser);
if($periksa!=0){
	echo "<script>alert('Username Sudah Digunakan')
    history.go(-1)</script>";
}else{
	$pass=md5($password);
	$insert = mysql_query("insert into user values ('$username','$password','$email','$nama','$alamat','default.png','user')");
	echo "<script>alert('Sukses')</script>";
	header('location:index.php');
}
?>