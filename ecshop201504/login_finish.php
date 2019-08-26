<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
    function goBack(){
        history.go(-2);   
    }
</script>

<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
include("userdata.php");

$em = $_POST['email'];
$pw = $_POST['password'];
//搜尋資料庫資料
$sql = "SELECT * FROM userdata where email = '$em'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($em != null && $pw != null && $row[2] == $em && $row[3] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['userID'] = $row[0];
       // echo "<script type='text/javascript'>goBack()</script>";
        header("Location: http://120.113.173.99/ecshop201504/");
}
else
{
        echo "<script>alert('Login failed!'); location.href = 'http://120.113.173.99/ecshop201504/login.php';</script>";
}
?>