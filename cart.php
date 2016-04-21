<?php
include"koneksi.php";					
if(!isset($_COOKIE['username'])){
?>
	<script language="javascript">
	alert('Harap Login Terlebih Dahulu !');
	history.go(-1);
	</script>
<?php
}
if(isset($_COOKIE['username'])){
$getProfile = mysql_query("select * from user where username='$_COOKIE[username]'");
$profile = mysql_fetch_array($getProfile);
$getTransaksi = mysql_query("select * from transaksi,produk where transaksi.id_produk=produk.id and username='$_COOKIE[username]' order by status_order");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Majestic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/baru.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<!----start-header---->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo-2.png" alt=""></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="index.php">Home</a><span> </span></li>
					<li><a href="about.php">About</a><span> </span></li>
					<li><a href="gallery.php">Commodity</a><span> </span></li>
					<li><a href="contact.php">Contact</a><span> </span></li>
					<?php
					include"koneksi.php";
					if(!isset($_COOKIE['username'])){
					?>
					<li><a href="register.php">Register</a><span> </span></li>
					<li><a href="login.php">Login</a><span> </span></li>
					<?php
					}else{
					?>
					<li><a href="myprofile.php">Profile</a><span> </span></li>
					<?php
					if(isset($_COOKIE['id_suplier'])){
					?>
					<li><a href="orderan.php">Orderan</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="logout.php">Logout</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="cart.php"><img src="images/bag.png" alt="" /></a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		</div>
	</div>	
	<!----end-header---->
	<!--contact-starts-->
	<div class="contact">
		<div class="container">
			<div class="contact-bottom">
				<div class="col-md-4 contact-left heading">
					<h2>Status Order</h2>
				</div>
				<div class="col-md-8">
					
					<table class="table table-bordered">
						<thead>
							<th>Produk</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Tanggal Transaksi</th>
							<th></th>
						</thead>
						<?php while($transaksi = mysql_fetch_array($getTransaksi)){
						?>
						<tbody>
							<td><?php echo $transaksi['nama'];$id=$transaksi['id_transaksi'] ?></td>
							<td><?php echo $transaksi['harga']; ?></td>
							<td><?php echo $transaksi['status_order']; ?></td>
							<td><?php echo $transaksi['tanggal']; ?></td>
							<td align="center">
								<?php 
									if($transaksi['status_order']=='-'){
										echo "<a href='#' data-toggle='modal' data-target='#myModal'>Order</a> | 
										<a href='#' data-toggle='modal' data-target='#detail'>Detail</a> | <a href='delete-order.php?id=$transaksi[id_transaksi]'>Batal</a>";
									}else{
										echo "<a href='#' data-toggle='modal' data-target='#detail'>Detail</a>";
									}
								?>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h2 class="modal-title" id="myModalLabel"><strong>Order</strong></h2>
									  </div>
									  <div class="modal-body">
										<form action="cek-order.php" method="POST" enctype="multipart/form-data"> 
										  <input type="hidden" name="id" value="<?php echo $transaksi['id_transaksi']; ?>">
										  <input type="text" name="penerima" class="form-control" placeholder="Nama Penerima"><br>
										  <textarea name="alamat" class="form-control" placeholder="Alamat Pengiriman"></textarea><br>
										  <input type="file" name="bukti">
										  <input type="submit" class="btn btn-primary" value="Order">
										</form>
									  </div>
									</div>
								  </div>
								</div>
								<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detailLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h2 class="modal-title" id="myModalLabel"><strong>Detail</strong></h2>
									  </div>
									  <div class="modal-body">
									  	<?php 
									  	$getFoto=mysql_query("select * from transaksi,produk where transaksi.id_produk=produk.id and id_transaksi='$transaksi[id_transaksi]'");
									  	$foto=mysql_fetch_array($getFoto);
									  	?>
										<img src="images/<?php echo $foto['foto'] ?>" alt="" />
									  </div>
									</div>
								  </div>
								</div>
							</td>
						</tbody>
						<?php
						}
						?>
					</table>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!----contact-end---->
	<!--footer-starts--> 
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<p>Design by Raka Kurnia N</p>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="google"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Address</h3>
					<p>RKN Company 
					<span>Jalan Leuser 28</span>
					(0341) 331 757</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-ends--> 
</body>
</html>
