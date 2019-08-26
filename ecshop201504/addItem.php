<?php
header('Content-type: text/html; charset=utf-8');

require_once "inc/class/Car.class.php";
include("mysql_connect.inc.php");
//

session_start();

$Cart = new Cart();

$sn = $_GET["sn"];
$result = mysql_query("SELECT * FROM Products WHERE ProductID=$sn");
$row=mysql_fetch_array($result);
//echo $sn;
//if(!is_numeric($num))
$num = 1;
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)){
	$Cart->addItem($sn, $row["Name"], $row["Price"], $num, $row["Description"], "單位");
}
//加入成功後回到前一頁
$referer  = $_SERVER['HTTP_REFERER'];
if(strlen(trim($referer))==0)
$referer = "no-sidebar.html";

header("Location:$referer");
?>
