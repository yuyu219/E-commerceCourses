<?php
header('Content-type: text/html; charset=utf-8');
include("logo.php");
include "inc/class/Car.class.php";
session_start();



$MyCart = new Cart();


$Myitems = $MyCart->getAllItems();


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
		<title>Shopping Cart - BabyLove</title>
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
		<!-- adder -->
		<link href="css/styleMask.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="js/cart/prototype.js"></script>
		<script type="text/javascript" src="js/cart/MyCar.js"></script>
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
						<li><a href="login.php" class="button special">Sign In</a></li>
					</ul>
				</nav>
        	</header>

			<!-- Main -->
			<body>
				<header class="major">
					<h2>Shopping Car</h2>
					<!--<p>Join a creative community that shares photos of your babies
                        <br>or your thinking of taking care of babies</br></p>-->
				</header>
				<div class="container">
					<table class="table table-hover table-responsive table-bordered"
					id="mytable">
				    <tr>
				        <th class='textAlignLeft'>Product Name</th>
				        <th>Price</th>
								<th>Numbers</th>
				        <th>Action</th>
				    </tr>
						<?php $checkcount=0 ; if ($Myitems) { foreach ($Myitems as $key=> $Myitem) { $checkcount ++; $background = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":""; //var_export($Myitem); ?>
							<tr id="item_<?php echo $Myitem->_sn;?>">
						    <td <?php echo $background;?>>
						        <input type="hidden" name="item<?php echo $Myitem->_sn;?>" value="<?php echo $Myitem->_sn;?>"></input>
						        <?php echo $Myitem->_name; ?></td>
						    <td <?php echo $background;?>>
						        <?php echo $Myitem->_price; ?></td>
						    <td <?php echo $background;?>>
						        <select name="Quity<?php echo $Myitem->_sn;?>" class="shopping_down" onchange="amount();">
						            <option value="1">1</option>
						            <option value="2">2</option>
						            <option value="3">3</option>
						            <option value="4">4</option>
						            <option value="5">5</option>
						            <option value="6">6</option>
						            <option value="7">7</option>
						            <option value="8">8</option>
						            <option value="9">9</option>
						            <option value="10">10</option>
						        </select>
						    </td>
						    <td <?php echo $background;?>>
						        <table width="96" border="0" cellpadding="0" cellspacing="0">
						            <tr>
						                <td width="70%" align="center" valign="middle">
						                    <input name="button<?php echo $Myitem->_sn; ?>" type="button" class="shopping_bt" style="cursor: pointer;" onclick="del(<?php echo $Myitem->_sn; ?>);" value="delete" />
						                </td>
						                <td width="30%" align="center" valign="middle"></td>
						            </tr>
						        </table>
						    </td>
						</tr>
						<?php } } else{ ?>
						<tr>
						    <td bgcolor="#e7e7e7" colspan="4">Your shopping car is empty</td>
						</tr>
						<?php } ?>
					</table>
					<table  border="0" cellpadding="5" cellspacing="0"
						style="margin-top: 10px;">
						<tr>
							<td colspan="2" align="right">total：NT$<span class="shopping_w2"
								id="amount">0</span></td>
						</tr>
					</table>
					<script type="text/javascript">amount();</script>
					<input name="nextbutton" type="button" class="shopping_bt" style="cursor: pointer;" onclick="" value="Go to shop" />
				</div>
			</body>
	</body>
</html>
