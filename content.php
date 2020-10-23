<?php
session_start();
ob_start();
include("link.php");
include("header.php");

$num = $_GET["no"];
$SQL = "SELECT * FROM info i JOIN user u ON i.uid=u.uid WHERE i.num = '$num'";

$result = mysqli_query($link, $SQL);



while($row = mysqli_fetch_assoc($result)){
    echo "<div class='cry'>";
    $title = $row['title'];   
    echo "<h3>".$row['title']."</h3>";
    echo "<p class='yo'>發布人&emsp;".$row['name']."&emsp;發布時間&emsp;".$row['init_date']."</p>";
    echo $row['content']."<br/>";
    echo "</div>";

if(isset($_SESSION["uid"])){
if($_SESSION["auth"]==1 or $_SESSION["auth"]==3){
    echo "<a href = 'delete.php?no=".$num."' class='del'>刪除公告</a><br/>";
}
}else{}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            echo $title;
            ?> - 國立高雄大學場地借用系統</title>
            <link rel="stylesheet" href="header.css">
</head>
<body>
    
</body>
</html>