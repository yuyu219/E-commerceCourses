<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include("logo.php");
?>

<!DOCTYPE html>
<html>	
<head>
<?php echo $showlogo ?>
<title>BabyLove</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Kipy Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/login_style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<h1>Good to see you again</h1>
	<div class="login-form">
			<div class="form-info">
					<form method="POST" action="login_finish.php">
							<input type="text" class="email" name="email" placeholder="Email" required=""/>
							<input type="password" class="password" name="password" placeholder="Password" required=""/>
							<p><a href="register.php">Create a free account!</a></p>
						<ul class="login-buttons">
							<li><input type="submit" value="Sign In"/></li>
							<!--<li><a href="#" class="hvr-sweep-to-left">Register</a></li>-->
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>

<!--/copyrights-->
</body>
</html>