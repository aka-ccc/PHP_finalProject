<?php
session_start();
ob_start();
include("link.php");
include("header.php");


$num = $_GET["no"];
$SQL = "UPDATE info SET visible = 0 WHERE num = '$num'";

$result = mysqli_query($link, $SQL);

echo "<script>alert('公告已刪除!!')</script>";
header("refresh:0.2;url=index.php");
?>