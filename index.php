<?php
include "koneksi.php";
$getBestOffers=mysql_query("select * from produk");
?>
<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Majestic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<script src="js/jquery-1.11.0.min.js"></script>
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
					<li><a class="active" href="index.php">Home</a><span> </span></li>
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
	<!--banner-starts-->
	<div class="banner" id="home">
		<div class="container">
			
		</div>
	</div>
	
	<!--banner-ends--> 
	
			<!--End-slider-script-->
	<!--welcome-starts--> 
	<div class="welcome">
		<div class="container">
		<script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		<section class="slider">
                <div class="flexslider">
                    <ul class="slides">
						<li>
							<div class="banner-top">
							<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-2.jpg" alt="" />
								<h3>Olympic Mebel</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						
						<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-1.jpg" alt="" />
								<h3>Chitose Mebel</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="banner-top">
						<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-6.jpg" alt="" />
								<h3>Daiko Mebel</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-3.jpg" alt="" />
								<h3>Donati Mebel</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="banner-top">
						<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-5.jpg" alt="" />
								<h3>Activ Cupu</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						<div class="col-md-6 banner-left">
							<div class="bnr-one">
								<img src="images/b-4.jpg" alt="" />
								<h3>Siantano Mebel</h3>
								<a href="#">Read More</a>
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</li>
          </ul>
        </div>
      </section>
	  <!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
			<div class="welcome-top">
				<h1>WELCOME TO OUR SITE</h1>
				<p> Disini kami menawarkan banyak jenis dan model furniture dari berbagai macam produsen dengan bahan dasar kayu MDF yang harganya cukup terjangkau. Nikmati pengalaman dan kemudahan berbisnis meubel bersama kami. </p>
			</div>
			<div class="welcome-bottom">
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--welcome-ends--> 
	<!--offer-starts-->
	<div class="offer">
		<div class="container">
			<div class="offer-top heading">
				<h2>OUR BEST OFFERS</h2>
			</div>
			<div class="offer-bottom">
			<?php
			while($getBest = mysql_fetch_assoc($getBestOffers)){
			?>	
				<div class="col-md-3 offer-left">
					<a href="detail.php?id=<?php echo $getBest['id'] ?>"><img src="images/<?php echo $getBest['foto'] ?>" alt="" /></a>
					<h4>Rp. <?php echo $getBest['harga'] ?></h4>
					<h4><a href="detail.php?id=<?php echo $getBest['id'] ?>"><?php echo $getBest['nama'] ?></a></h4>
					<p><?php echo $getBest['keterangan'] ?></p>
					<div class="o-btn">
						<a href="detail.php?id=<?php echo $getBest['id'] ?>">Read More</a>
					</div>
				</div>
			<?php
			}	
			?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--offer-ends--> 
	<!--nature-starts--> 
	
	<!--nature-ends--> 
	<!--field-starts--> 
	
	<!--field-end--> 
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
	<!--footer-ends-- > 
</body>
</html>
