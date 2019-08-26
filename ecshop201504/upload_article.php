<?php
    session_start(); 
    $id = $_SESSION['userID'];
    $datetime = date('YmdHis');
    $content = str_replace( chr(13).chr(10), "<br>", $_POST['content'] );
    include("mysql_connect.inc.php");
      
    $target_dir = "article_photo/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if(!move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)){
        echo "<script>alert('Post failed!'); location.href = 'http://120.113.173.99/ecshop201504/member_post.php';</script>";
    }
    $sql = "INSERT INTO article(datetime, userID, picture_name, picture_type, content) VALUES ('$datetime', '$id', '". $_FILES['picture']['name'] ."', '". $_FILES['picture']['type'] ."','$content')";
    if(mysql_query($sql))
    {
        header("Location: http://120.113.173.99/ecshop201504/member.php");
    }
    else
    {
        echo "<script>alert('Post failed!'); location.href = 'http://120.113.173.99/ecshop201504/member_post.php';</script>";
    }
?>