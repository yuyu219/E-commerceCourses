<? php
    session_start();
    $userid = $_SESSION['userID'];
    include("mysql_connect.inc.php");
    //搜尋資料庫資料
    $sql = "SELECT * FROM article where userID = '$userid'";
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
        echo $row[0], $row[2], $row[3], $row[5], $row[6]
    }
?>