<?php
include "../koneksi.php";
$username=$_POST['username'];
$nama=$_POST['nama_lengkap'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$password=$_POST['password'];
$ulang_password=$_POST['ulang_password'];
$level=$_POST['level'];
$cekuser=mysql_query("select * from user where username='$username'");
$array=mysql_fetch_array($cekuser);
$periksa=mysql_num_rows($cekuser);
if($periksa!=0){
	echo "<script>alert('Username Sudah Digunakan')
    history.go(-1)</script>";
}else{
	$insert = mysql_query("insert into user values ('$username','$password','$email','$nama','$alamat','default.png','$level')");
	echo "<script>alert('Sukses')</script>";
	header('location:user.php');
}
?>