<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | About</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Majestic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
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
					<li><a class="active" href="about.php">About</a><span> </span></li>
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
	<!--about-starts--> 
	<div class="about">
		<div class="container">
			<div class="about-top heading">
				<h1>ABOUT US</h1>
				<h4>Pilih Model, Langsung Order.</h4>
				<p>Kami menawarkan pengalaman dan kemudahan dalam berbelanja meubel disini. Web ini merupakan web crowdsourcing dimana supplier dapat mengambil bagian dalam menjual meubelnya dengan mendaftarkan dulu pada admin. Tidak hanya itu berbagai macam jenis model dan produsen yang kami tawarkan sehingga pelanggan tidak akan merasa model yang kami tawarkan terlalu sedikit. Cara pembelian furniture pada website ini sangat mudah. Anda hanya tinggal memilih barang dan Transfer ke ADMIN dengan No. Rekening 0089 67554365 766 Bank BCA atas Nama Raka Kurnia N. Setelah transfer anda masuk ke cart wishlist dan klik order lalu isi Nama Penerima dan Alamatnya dan upload foto bukti transfer dalam format jp atau png dengan ukuran tidak lebih dari 1 MB. Setelah itu admin akan memvalidasi transaksi tersebut dan barang pesanan akan langsung diantar sesuai dengan alamat penerima.</p>
				<div class="about-bottom">
					<div class="col-md-4 about-left">
						<a href="single.html"></a>
						<h5><a href="single.html">What We Do</a></h5>
						<p>Kami memasarkan produk dari supplier kepada Anda. Tidak hanya dari 1 produsen saja, kami memasarkan dari banyak produsen mebel berbahan MDF.</p>
					</div>
					<div class="col-md-4 about-left">
						<a href="single.html"></a>
						<h5><a href="single.html">Our Standards</a></h5>
						<p>Kami tidak akan mengecewakan pelanggan. Kami mencoba untuk dapat menawarkan barang yang sesuai dengan keinginan pelanggan.</p>
					</div>
					<div class="col-md-4 about-left">
						<a href="single.html"></a>
						<h5><a href="single.html">Our Capabilities</a></h5>
						<p>Kami mampu menjamin bahwa barang yang kami tawarkan adalah barang yang berkualitas. Sehingga tidak akan mengecewakan anda.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----about-end---->
	<!--advantages-starts--> 
	<div class="advantages">
		<div class="container">
			<div class="col-md-6 advantages-left heading">
				<h2>OUR ADVANTAGES</h2>
				<div class="advn-one">
						<div class="ad-mian">
							<div class="ad-left">
								<p>1</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">Banyak Model Furniture</a></h4>
								<p>Kami bekerjasama dengan banyak produsen furniture/mebel yang memproduksi dengan bahan MDF sehingga pilihan model yang kami tawarkanpun beragam. </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ad-mian">
							<div class="ad-left">
								<p>2</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">Mudah dalam Prosesnya</a></h4>
								<p>Berbagai kemudahan kami tawarkan dalam berbelanja meubel secara online. Supplier pun dapat dengan mudah memasarkan meubelnya pada web ini dengan menghubungi admin.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ad-mian">
							<div class="ad-left">
								<p>3</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">Akses Kapanpun</a></h4>
								<p>Dengan adanya website ini, pelanggan dapat membeli dan mengakses website kapanpun 24jam non-stop. </p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
			<div class="col-md-6 advantages-left heading">
				<h3>OUR SKILLS</h3>
			<div class="advn-two">
						<h4>Keamanan dalam website ini terjamin sehingga transaksi dapat dilakukan dengan aman dan nyaman.</h4>
						<p>Kami telah berpengalaman dalam hal bisnis E-Commerce</p>
						<ul>
							<li><a href="#">Handal.</a></li>
							<li><a href="#">Pengantaran barang cepat sampai tujuan.</a></li>
							<li><a href="#">Pelayanan yang ramah.</a></li>
							<li><a href="#">Cepat dan mudah.</a></li>
							<li><a href="#">Jaminan uang kembali.</a></li>
							<li><a href="#">Mementingkan pelanggan.</a></li>
							<li><a href="#">Kemudahan akses.</a></li>
						</ul>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--advantages-end--> 
	<!--team-starts--> 
	<div class="team">
		<div class="container">
			<div class="team-top heading">
				<h3>OUR TEAM</h3>
			</div>
			<div class="team-bottom">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Project Leader</h3>
										<p>Raka Kurnia N</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>System Analyst</h3>
										<p>Raka Kurnia N</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Desaigner</h3>
										<p>Raka Kurnia N</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Programmer</h3>
										<p>Raka Kurnia N</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--team-end--> 
	<!--footer-starts--> 
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<p>Design by Raka Kurnia N</a></p>
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
