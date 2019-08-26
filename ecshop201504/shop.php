<?php
	include("mysql_connect.inc.php");
    include("logo.php");
?>
<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
        <?php echo $showlogo ?>
		<title>Shop - BabyLove</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!-- adder adverst -->
		<!-- Load css styles -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="css/pluton.css" />
		<!--[if IE 7]>
				<link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />

		<!-- adder list -->
		<!--<link href="css/bootstrap1.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary JavaScript plugins) -->
		<script type='text/javascript' src="js/web/jquery-1.11.1.min.js"></script>
		<!-- Custom Theme files -->
		<!--<link href="css/style1.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
		<!-- start menu -->
		<link href="css/web/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/web/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/web/menu_jquery.js"></script>
		<!-- adder item -->
		<!-- eshop -->
		<link href="css/eshop/bootstrap.min.css" rel="stylesheet">
		<link href="css/eshop/font-awesome.min.css" rel="stylesheet">
		<link href="css/eshop/prettyPhoto.css" rel="stylesheet">
		<link href="css/eshop/price-range.css" rel="stylesheet">
		<link href="css/eshop/animate-ec.css" rel="stylesheet">
		<link href="css/eshop/main.css" rel="stylesheet">
		<link href="css/eshop/responsive.css" rel="stylesheet">
		<!-- eshop -->
		<!-- /adder -->
	</head>
	<body id="top">

		<!-- Header -->
			<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html"><img src="images/babyLove.png"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about_us.php">About us</a></li>
						<li><a href="community_home.php">Community</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="shopcar.php">Shopping Cart</a></li>
						<li><a href="login.php" class="button special">Sign In</a></li>
					</ul>
				</nav>
        	</header>
			<!-- Main -->
			<body>
				<!-- adverts wall -->
				<div id="home">
          <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
									<!-- Start slide -->
									<?php
									$result = mysql_query("SELECT * FROM Products ORDER BY ProductID DESC LIMIT 3");
									$number = 1;
									while($row = mysql_fetch_array($result)){
										//printf ("ID: %s Name: %s", $row["ProductID"], $row["Name"]);
										echo "<div class='da-slide'>";
										echo "<h2 class='fittext2'>" ;
										echo $row["Name"];
										echo "</h2>";
										echo "<h4>";
										echo $row["Slogan"];
										echo "</h4>";
										echo "<p>";
										echo $row["Description"];
										echo "</p>";
										echo "<a href='addItem.php?sn=";
										echo $row["ProductID"];
										echo "' class='da-link button'>Add to cart</a>";
										echo "<div class='da-img'>";
										echo "<img src='images/image/";
										echo $row["ProductID"];
										echo ".png' alt='image0";
										echo $number;
										echo "'>";
										echo "</div>";
										echo "</div>";

										$number=$number+1;
									}

									mysql_free_result($result);
									?>
                  <!-- Start cSlide navigation arrows -->
                  <div class="da-arrows">
                      <span class="da-arrows-prev"></span>
                      <span class="da-arrows-next"></span>
                  </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
				<!-- /adverts wall -->
				<!-- selection icon -->
				<ul class="megamenu skyblue">
					<li class="grid"><a class="color2" href="#">All Products</a></li>
					<li><a class="color4" href="#">Book</a></li>
					<li><a class="color5" href="#">Consumables</a></li>
					<li><a class="color6" href="#">Nourishment</a></li>
					<li><a class="color7" href="#">Food</a></li>
					<li><a class="color8" href="#">Appliance</a></li>
					<li><a class="color9" href="#">Adornment</a></li>
				 </ul>
				<!-- /selection icon -->
				<div class="col-sm-5 right">
				<script>
						(function() {
							var cx = '012269281072469380778:jl6qctzz0gg';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
									'//cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						})();
						</script>
						<gcse:search></gcse:search>
				</div>
				<!-- item -->
				<div class="col-sm-12">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">ALL PRODUCTS</h2>
					<?php
					$result = mysql_query("SELECT * FROM Products");
					while($row = mysql_fetch_array($result)){
						//printf ("ID: %s Name: %s", $row["ProductID"], $row["Name"]);
						echo "<div class='col-sm-4'>";
						echo "<div class='product-image-wrapper'>";
						echo "<div class='single-products'>";
						echo "<div class='productinfo text-center'>";
						echo "<img src='images/image/";
						echo $row["ProductID"];
						echo ".png' alt='' />";
						echo "<h2>$";
						echo $row["Price"];
						echo "</h2>";
						echo "<p>";
						echo $row["Name"];
						echo "</p>";
						echo "<a href='addItem.php?sn=";
						echo $row["ProductID"];
						echo "' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>";
						echo "</div>";
						echo "<div class='product-overlay'>";
						echo "<div class='overlay-content'>";
						echo "<h2>$";
						echo $row["Price"];
						echo "</h2>";
						echo "<p>";
						echo $row["Name"];
						echo "</p>";
						echo "<a href='addItem.php?sn=";
						echo $row["ProductID"];
						echo "' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "<div class='choose'>";
						echo "<ul class='nav nav-pills nav-justified'>";
						echo "<li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>";
						echo "<li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>";
						echo "</ul>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}
					mysql_free_result($result);
					?>
				</div><!--features_items-->
			</div>
				<!-- /item -->
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Accumsan</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
								<div class="6u">
									<h3>Faucibus</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
							</div>
							</div>
							<div class="6u">
								<h2>Aliquam Interdum</h2>
								<p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/BabyLovelovelovechuhcu" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
								</ul>
							</div>
						</div>
						<ul class="copyright">
							<li>&copy; Untitled. All rights reserved.</li>
							<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
							<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
						</ul>
					</div>
			</footer>
		</body>
			<!--eshop-->
			<script src="js/eshop/bootstrap.min.js"></script>
			<script src="js/eshop/price-range.js"></script>
			<script src="js/eshop/jquery.prettyPhoto.js"></script>
			<!-- ScrollUp button end -->
			<!-- Include javascript -->
			<script type="text/javascript" src="js/pluton/jquery.mixitup.js"></script>
			<script type="text/javascript" src="js/pluton/bootstrap.js"></script>
			<script type="text/javascript" src="js/pluton/modernizr.custom.js"></script>
			<script type="text/javascript" src="js/pluton/jquery.bxslider.js"></script>
			<script type="text/javascript" src="js/pluton/jquery.cslider.js"></script>
			<script type="text/javascript" src="js/pluton/jquery.placeholder.js"></script>
			<script type="text/javascript" src="js/pluton/jquery.inview.js"></script>
			<!-- Load google maps api and call initializeMap function defined in app.js -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
			<!-- css3-mediaqueries.js for IE8 or older -->
			<!--[if lt IE 9]>
					<script src="js/respond.min.js"></script>
			<![endif]-->
			<script type="text/javascript" src="js/pluton/app.js"></script>
	</body>
</html>
