<!DOCTYPE HTML>
<?php 
    session_start();
    include("logo.php");
    if(isset($_SESSION['userID'])){
       header("Location: http://120.113.173.99/ecshop201504/afterlogin_community_home.php");
    }
?>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
        <?php echo $showlogo ?>
		<title>BabyLove</title>
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
	</head>
	<body id="top">

		<!-- Header -->
		<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html"><img src="images/babyLove.png"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about_us.php">About us</a></li>
						<li><a href="community_home.php">Community</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="login.php" class="button special">Sign In</a></li>
					</ul>
				</nav>
        </header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>BabyLove</h2>
					<p>Community & Shopping <!-- <a href="http://templated.co">TEMPLATED</a>--></p>
					<ul class="actions">
						<li><a href="register.php" class="button big special">Sign Up</a></li>
						<li><a href="about_us.php" class="button big alt">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>Services</h2>
					<!--<p>Join a creative community that shares photos of your babies 
                        <br>or your thinking of taking care of babies</br></p>-->
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<!--<i class="icon fa-area-chart major"></i>-->
                                <a href="community_home.php" class="image fit"><img src="images/community-icon.jpg" alt="" /></a>
                                <!--<img src="images/babyLove.png">-->
								<h3>Community</h3>
								<p>Share the photos of your children or your idea to take care of children.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<!--<i class="icon fa-refresh major"></i>-->
                                <a href="shop.php" class="image fit"/><img src="images/shop-icon.jpg" alt=""></a>
								<h3>Shop</h3>
								<p>Supply what about children you could think of.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
                                <a href="#" class="image fit"/><img src="images/mission-icon.jpg" alt=""></a>
								<!--<i class="icon fa-cog major"></i>-->
								<h3>Mission</h3>
								<p>Accomplish the missions and get awards.</p>
							</section>
						</div>
					</div>
				</div>
			</section>
			
		<!-- Two -->
		<!--	<section id="two" class="wrapper style2">
				<header class="major">
					<h2>A Fresh Perspective</h2>
					<p>Live a full and interesting life with childlren</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<!--<h3>Mollis adipiscing nisl</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>-->
								<!--<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>-->
						<!--		</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
								<!--<h3>Neque ornare adipiscing</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>-->
								<!--<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>-->
						<!--		</ul>
							</section>
						</div>
					</div>
    
                    <div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
								<!--<h3>Mollis adipiscing nisl</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>-->
								<!--<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>-->
						<!--		</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
								<!--<h3>Neque ornare adipiscing</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>-->
								<!--<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>-->
							<!--	</ul>
							</section>
						</div>
					</div>

				</div>
			</section>

        <!-- Mission -->
            <!--<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Mission this week</h2>
					<p>Po a photo of your children's smile.</p>
				</header>
				<div class="container">
					<section>
						<h2>Mollis ut adipiscing</h2>
						<a href="#" class="image fit"><img src="images/banner.jpg" alt="" /></a>
						<p></p>
					</section>
				</div>
			</section>-->


		<!-- Shop -->
		<!--	<section id="three" class="wrapper style1">
                <section id="Shopbanner">
				<div class="inner">
					<h2>Shop:
                        <br>children's garments to needed</br></h2>
					<!--<p>You could see many needed children's garments--> <!-- <a href="http://templated.co">TEMPLATED</a>--><!--</p>-->
					<!--<ul class="actions">
                        <li><a href="#content" class="button big special">Learn More</a></li>
						<!--<li><a href="#elements" class="button big alt">Learn More</a></li>-->
					<!--</ul>
				</div>
                </a>
			    </section>
			</section>	-->
        
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
</html>