<?php
include "koneksi.php";
			$ekstensi_diperbolehkan	= array('png','jpg','PNG');
			$nama = $_FILES['bukti']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['bukti']['size'];
			$file_tmp = $_FILES['bukti']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
$id=$_POST['id'];
$nama=$_POST['penerima'];
$alamat=$_POST['alamat'];
$bukti=$_POST['bukti'];
$insert = mysql_query("UPDATE transaksi set status_order='pending',nama_penerima='$nama', alamat_pengiriman='$alamat' where id_transaksi='$id'");
//header('location:cart.php');
echo "$nama"
?>
