<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
    session_start();
    include("logo.php");
    include("mysql_connect.inc.php");
    //FetchUserData()
    $userid = $_SESSION['userID'];
    $sql = "SELECT * FROM userdata where userID = '$userid'";
    $result = mysql_query($sql);
    $row = @mysql_fetch_row($result);
    $userName = $row[1];
    $userAbout = $row[5];
?>

<html>
	<head>
        <?php echo $showlogo ?>
		<title><?php echo $userName ?> - BabyLove</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
        <!-- Profile -->
			<header id="mheader">
                <a href="member.php" class="image avatar"><img src="images/profile100.jpg" alt="" /></a>
                <h1>
                    <strong><?php echo $userName ?></strong><br>
                    <?php echo $userAbout?>
                </h1>
			</header>

		<!-- Main -->
			<div id="main">
                <msection id="three">
						<h2>Post a new article</h2>
                        <br>
						<div class="row">
							<div class="8u 12u$(small)">
								<form method="post" enctype="multipart/form-data" action="upload_article.php">
									<div class="row uniform 50%">
                                        <div class="12u$"><p>Add the picture</p></div>
										<div class="6u 12u$(xsmall)"><input type="file" name="picture" id="picture"/></div>
                                        <div class="12u$"><p><br></p></div>
										<div class="12u$"><textarea name="content" id="content" placeholder="What's on your mind?" rows="4"></textarea></div>
									</div>
                                    <div class="12u$"><p><br></p></div>
                                    <ul class="actions">
				                        <li><Input type="submit" class="button" value="Post"></li>
				                    </ul>
								</form>
							</div>
							<div class="4u$ 12u$(small)">
							</div>
						</div>
				</msection>
			</div>

		<!-- Footer -->
			<footer id="mfooter">
                <ul class="actions">
				    <li><a href="member_edit_profile.php" class="button">Edit Profile</a></li>
				</ul>
				<!--<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>-->
				<!--<ul class="copyright">
					<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>-->
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>