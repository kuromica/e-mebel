<?php 
include 'koneksi.php';
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$role=$_POST['role'];
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];
$nama_lengkap="$first_name $middle_name $last_name";
$pass=md5($_POST['password']);

include "SimpleImage.php";
$file = $_FILES['foto']['tmp_name'];
$image = new SimpleImage();
$image->load($file);
$image->resize(200,300);
$image->save("../images/".$_FILES['foto']['name']);
$avatar=basename($_FILES['foto']['name']);

$ceklogin = mysql_query("select * from member where username = '$username'");
$array = mysql_fetch_array($ceklogin);
$periksa = mysql_num_rows($ceklogin);
session_start();
if($periksa!=0){
	echo "<script>alert('username sudah ada');history.go(-1)</script>";
} else {
	if(empty($username)){
		echo "<script>alert('Username harus diisi');history.go(-1)</script>";
	}
	if(empty($first_name)){
		echo "<script>alert('First name harus diisi');history.go(-1)</script>";
	}
	if(empty($middle_name)){
		echo "<script>alert('Middle name harus diisi');history.go(-1)</script>";
	}
	if(empty($last_name)){
		echo "<script>alert('last name harus diisi');history.go(-1)</script>";
	}
	if(empty($email)){
		echo "<script>alert('email harus diisi');history.go(-1)</script>";
	}
	if(empty($alamat)){
		echo "<script>alert('alamat harus diisi');history.go(-1)</script>";
	}
	if(empty($nohp)){
		echo "<script>alert('no hp harus diisi');history.go(-1)</script>";
	}
	if(empty($role)){
		echo "<script>alert('role harus diisi');history.go(-1)</script>";
	}
	if(empty($password)){
		echo "<script>alert('role harus diisi');history.go(-1)</script>";
	}
	if(empty($avatar)){
		echo "<script>alert('foto harus diisi');history.go(-1)</script>";
	}else{
		$insert = mysql_query("insert into member values('$username','$email','$pass','$nama_lengkap','$alamat','$nohp','$avatar','$role')");
		?>
		    <script>alert('Berhasil Daftar');document.location.href = "index.php";</script>
		<?php
	}
}




?>