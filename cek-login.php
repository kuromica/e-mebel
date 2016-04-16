<?php
include"koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$ceklogin=mysql_query("select * from user where username='$username' and password='$password'");
$array=mysql_fetch_array($ceklogin);
$periksa=mysql_num_rows($ceklogin);
if ($periksa!=0){
	setcookie("username", "$array[username]");
	setcookie("level","$array[level]");

	if($array['level'] == 'admin'){
		header('location:admin/index.php');
	}else if($array['level'] == 'suplier'){
		$cekSuplier=mysql_query("select * from suplier where nama='$array[nama_lengkap]'");
		$suplier=mysql_fetch_array($cekSuplier);
		setcookie("id_suplier","$suplier[id_suplier]");
		header('location:index.php');
	}else{
		header('location:index.php');
	}
}else{
	?>
	<script language="javascript">
	alert('USERNAME/PASSWORD SALAH !');
	history.go(-1);
	</script>
    <?php
}
?>