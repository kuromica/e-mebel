<?php
include "koneksi.php";
$getProduk=mysql_query("select * from produk where id='$_GET[id]'");
$getKomentar=mysql_query("select * from komentar where id_produk='$_GET[id]'");
if(isset($_COOKIE['username'])){
	$getProfile = mysql_query("select * from user where username='$_COOKIE[username]'");
	$profile = mysql_fetch_array($getProfile);
}
$periksa=mysql_num_rows($getKomentar);
$produk = mysql_fetch_array($getProduk);
?>
<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | Detail</title>
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
	<!--blog-->
	<div class="blog">
		<div class="container">
			<div class="blog-head heading">
			
			</div>	
			<div class="blog-top">
				<div class="col-md-9 blog-left">
					<div class="blog-main">
						<a href="" class="bg"><?php echo"$produk[nama]"?></a>
						<p>Post by <a href="#"><?php echo"$produk[oleh]"?></a> on <?php echo"$produk[tanggal]"?></p>
					</div>
					<div class="blog-main-one">
						<div class="blog-one">
							<img src="images/<?php echo"$produk[foto]"?>" alt="" />
							<p><?php echo"$produk[keterangan]"?>.</p>
							<?php
							if(isset($_COOKIE['username'])){
							?>
							<div class="o-btn">
								<a href="cek-transaksi.php?id=<?php echo $produk['id'] ?>">Buy Now</a>
							</div>
							<?php
							}
							?>
						</div>	
						<div class="blog-comments">
							<ul>
								<li><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><a href="#"><?php echo"$produk[id_suplier]"?></a></li>
								<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><p><?php echo"$produk[tanggal]"?></p></li>
								<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#"><?php echo"$produk[oleh]"?></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="comments">
						<div class="comments-top heading">
							<h3>COMMENTS</h3>
						</div>
						<div class="comments-bottom">

							<?php
							while($komentar=mysql_fetch_array($getKomentar)){
							?>

								<div class="media">
									<div class="media">
										<div class="media-left">
											<a href="#">
											<img class="media-object" src="images/co.png" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="#"><?php echo $komentar['nama']?></a></h4>
											<p><?php echo $komentar['komentar']?></p>
										</div>
										</div>
									</div>
								</div>

							<?php
							}
							?>

						</div>

						<div class="reply heading">
					 		<h3>LEAVE A COMMENT</h3>
					 		<div class="contact-form">
								<form method="POST" action="cek-komentar.php">
									<input type="hidden" name="id_produk" value="<?php echo $_GET['id']?>">
									<input type="text" placeholder="Nama" name="nama" class="teks" <?php if(isset($_COOKIE['username'])){echo "value='$profile[nama_lengkap]'";}?> required/>
									<input type="email" placeholder="Email" name="email" class="teks" <?php if(isset($_COOKIE['username'])){echo "value='$profile[email]'";}?> required/>
									<textarea placeholder="Message" name="komentar"></textarea>
									<input type="submit" value="POST"/>
				   				</form>
				   			</div>	
						</div>
				</div>
				<div class="col-md-3 blog-right">
					<div class="categories">
						<h3>CATEGORIES</h3>
						<ul>
							<li><a href="#">Kursi</a></li>
							<li><a href="#">Meja</a></li>
							<li><a href="#">Sofa</a></li>
							<li><a href="#">Lemari</a></li>
							<li><a href="#">Furniture</a></li>
						</ul>
					</div>
					<div class="categories">
						<h3>RECENT POSTS</h3>
						<ul>
							<li><a href="#">Kursi Cozy</a></li>
							<li><a href="#">Set Kursi dan Meja</a></li>
							<li><a href="#">Furniture Bathroom</a></li>
							<li><a href="#">Meja Unik</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--blog-->
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
