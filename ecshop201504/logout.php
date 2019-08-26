<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['userID']);
header("Location: http://120.113.173.99/ecshop201504");
?>