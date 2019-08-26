<!DOCTYPE HTML>
<?php 
    session_start();
    include("logo.php");
    if(isset($_SESSION['userID'])){
       header("Location: http://120.113.173.99/ecshop201504/afterlogin_community_home.php");
    }
    $insertStr='';
    $sql = "SELECT * FROM article";
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
        $temp = '';
        $temp .= '<article class="6u$ 12u$(xsmall) work-item">';
        $temp = $temp.'<a href="http://localhost/ecshop201504/article.php?article='.$row[0].'" class="image fit thumb"><img src="article_photo/'.$row[2].'" alt="" /></a>';
        $temp = $temp.'<p><img src="images/icon/heart.png">'.$row[5].'&nbsp&nbsp;<img src="images/icon/comments.png">'.$row[6].'</p></article>';
        $insertStr .= $temp;
    }
?>

<script type="text/javascript">
    function ShowArticle(){
        document.getElementById("ShowPictureArticle").innerHTML='<?php echo $insertStr?>';
    }
</script>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
        <?php echo $showlogo ?>
		<title>Community - BabyLove</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
            <link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top" onload="ShowArticle()">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php"><img src="images/babyLove.png"></a></h1>
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
                <div id="ShowPictureArticle" class="row">
                </div>
            </section>
        </section>
    
    
	</body>
</html>