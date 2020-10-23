<?php
session_start();
ob_start();
include("link.php");
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>空間資料查詢 - 國立高雄大學空間借用系統</title>
</head>
<body>
    <ul>
        <li><a href="placesort.php?Location=運動場館">運動場館</a></li>
        <li><a href="placesort.php?Location=人文社會科學院">人文社會科學院</a></li>
        <li><a href="placesort.php?Location=理學院">理學院</a></li>
        <li><a href="placesort.php?Location=工學院">工學院</a></li>
        <li><a href="placesort.php?Location=法學院">法學院</a></li>
        <li><a href="placesort.php?Location=綜合大樓">綜合大樓</a></li>
        <li><a href="placesort.php?Location=管理學院">管理學院</a></li>
        <li><a href="placesort.php?Location=圖書資訊大樓">圖書資訊大樓</a></li>
    </ul>
        
</body>
</html>