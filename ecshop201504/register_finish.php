<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("mysql_connect.inc.php");

    $pass = 1;
    $id = date('YmdHis');
    $name = $_POST['name'];
    $em = $_POST['em'];

    //檢查email格式
    if(!valid_email($em)){
        echo "<script>alert('This is not a valid email.'); location.href = 'http://120.113.173.99/ecshop201504/register.php';</script>";
        $pass = 0;
        exit;
    }

    //檢查email是否已有人使用
    $du = dupicate_email($em);
    if($du>0){
        echo "<script>alert('This email is already in use.'); location.href = 'http://120.113.173.99/ecshop201504/register.php';</script>";
        $pass = 0;
        exit;
    }
    else if($du==-1){
        echo "<script>alert('發生錯誤'); location.href = 'http://120.113.173.99/ecshop201504/register.php';</script>";
        exit;
    }
    $pw = $_POST['pw'];

    //判斷帳號密碼是否為空值
    //確認密碼輸入的正確性
    if($pass==1 && $id != null && $name != null && $em != null && $pw != null)
    {
            //新增資料進資料庫語法
        $sql = "INSERT INTO userdata (userID, username, email, password) VALUES ('$id', '$name', '$em', '$pw')";
        if(mysql_query($sql))
        {
            $_SESSION['userID'] = $id;
            echo "<script>alert('Register successfully!'); location.href = 'http://120.113.173.99/ecshop201504';</script>";
        }
        else
        {
            echo "<script>alert('Register failed!'); location.href = 'http://120.113.173.99/ecshop201504/register.php';</script>";
        }
    }
    else
    {
            echo "<script>alert('請正確填寫資料'); location.href = 'http://120.113.173.99/ecshop201504/register.php';</script>";
    }
?>

<?php
    function valid_email($email)
    {
        return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
    }
?>

<?php
    function dupicate_email($email)
    {   
        $sql = "SELECT * FROM userdata WHERE email = '$email'";
        $result =mysql_query($sql);
        if($result)
            $count = mysql_num_rows($result);
        else
            $count = -1;
        //echo $count;
        return  $count;
    }
?>