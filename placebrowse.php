<?php
session_start();
ob_start();
include("link.php");
include("header.php");
$Location = $_GET["Location"];
$SQL = "SELECT * FROM place WHERE Location = '$Location' ORDER BY pname ASC";
$result = mysqli_query($link, $SQL);
// echo "<a href='placebrowse.php?Location=".$Location."'>".$Location."</a><br/>";
echo "<div class='wrap'>";
echo "<div class='QQQQ'>";
echo "<ul>";
echo "<li><a href='placebrowse.php?Location=運動場館'>運動場館</a></li>";
echo "<li><a href='placebrowse.php?Location=人文社會科學院'>人文社會科學院</a></li>";
echo "<li><a href='placebrowse.php?Location=理學院'>理學院</a></li>";
echo "<li><a href='placebrowse.php?Location=工學院'>工學院</a></li>";
echo "<li><a href='placebrowse.php?Location=法學院'>法學院</a></li>";
echo "<li><a href='placebrowse.php?Location=綜合大樓'>綜合大樓</a></li>";
echo "<li><a href='placebrowse.php?Location=管理學院'>管理學院</a></li>";
echo "<li><a href='placebrowse.php?Location=圖書資訊大樓'>圖書資訊大樓</a></li>";
echo "</ul>";
echo "</div>";
echo "<div class='we'>";
echo "<table class='browseQQQ'>";
echo "<tr>";
echo "<td>場地名稱</td>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){ 
    $location = $row['Location'];
    echo "<tr>";
    echo "<td class='tdQ'>"."<a href='placesort.php?num=".$row['pnum']."&"."Location=".$Location."'>".$row['pname']."</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            echo $location;?> - 國立高雄大學場地借用系統</title>
</head>
<body>
    
</body>
</html>