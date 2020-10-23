<?php
session_start();
ob_start();
include("link.php");
include("header.php");
if(isset($_SESSION["uid"])){
if($_SESSION["auth"]==1 or $_SESSION["auth"]==3){

}else{
    echo "<script>alert('權限不符!')</script>";
    header("refresh:0.2 ; url= index.php");
}
$anum = $_GET["anum"];
$SQL_get = "SELECT pay FROM apply WHERE anum = '$anum'";
$result = mysqli_query($link, $SQL_get);
while($row = mysqli_fetch_assoc($result)){
    $pay = $row["pay"];
}
if($pay == 0){
    $pay = 1;
}else{
    $pay = 0;
}
$SQL = "UPDATE apply SET pay = '$pay' WHERE anum = '$anum'";
mysqli_query($link, $SQL);
header("refresh:0;url=permit.php");
}else{
    echo "<script>alert('您尚未登入!')</script>";
    header("refresh:0.2;url=login.php");
}
?>