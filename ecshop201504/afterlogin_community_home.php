<!DOCTYPE HTML>
<?php 
    session_start();
    include("logo.php");
    if(!isset($_SESSION['userID'])){
       header("Location: http://120.113.173.99/ecshop201504/community_home.php");
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
				<h1><a href="index.php"><img src="images/babyLove.png"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="afterlogin_about_us.php">About us</a></li>
						<li><a href="afterlogin_community_home.php">Community</a></li>
						<li><a href="shop.php">Shop</a></li>
                        <li><a href="member.php"><img src="images/profile50.jpg"></a><li>
						<li><a href="logout.php" class="button special">Sign Out</a></li>
					</ul>
				</nav>
			</header>


		<!-- Mission -->
        <section id="Missionbanner">
				<div class="inner">
					<h2>New Mission:Smile</h2>
					<!--<p>You could see many needed children's garments--><!--<a href="http://templated.co">TEMPLATED</a>--><!--</p>-->
					<ul class="actions">
                    <!--<li><a href="#content" class="button big special">Learn More</a></li>-->
						<li><a href="#elements" class="button big alt">Learn More</a></li>
					</ul>
				</div>
                </a>
        </section>
        <!-- New Article -->
        <section id="one" class="wrapper style1">
            <section class="container">
                <h3>New Photo</h3>
            </section>
        </section>
	</body>
</html>