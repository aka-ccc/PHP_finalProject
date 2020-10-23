<?php
session_start();
ob_start();
include("link.php");
include("header.php");
?>
<html>
    <script LANGUAGE="JavaScript">
        function openwin() {
            window.open ("period.html", "時間對照表", "height=550, width=250, top=150, left=1200,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
        } 
    </script>
</html>
<?php

$pnum = $_GET["num"];
$Location = $_GET["Location"];
$SQL = "SELECT * FROM apply a JOIN user u ON a.uid = u.uid WHERE a.pnum = '$pnum' ORDER BY a.date DESC";
$SQL_pname = "SELECT pname FROM place WHERE pnum = '$pnum'";
$result = mysqli_query($link, $SQL);
$result_pname = mysqli_query($link, $SQL_pname);
echo "<div class='wrap'>";
echo "<div class='QQQQ'>";
echo "<ul>";
// echo "<a href='placebrowse.php?Location=".$Location."'>".$Location."</a><br/>";
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
echo "<div class='QQQQQdiv'>";
echo "<a href = '#' class='open' onclick = 'openwin()'>"."開啟時間對照表"."</a><br/>";
echo "<table class='browseQQ'>";
echo "<tr>";
echo "<td class='td'>借用日期</td>";
echo "<td class='td'>借用時段</td>";
echo "<td class='td'>借用人</td>";
echo "<td class='td'>借用目的</td>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){ 
    echo "<tr>";
    echo "<td class='td'>".$row['date']."</td>";
    echo "<td class='td'>".$row['period']."</td>";
    echo "<td class='td'>".$row['name']."</td>";
    echo "<td class='td'>".$row['purpose']."</td>";
    echo "</tr>";
}
while($row_pname = mysqli_fetch_assoc($result_pname)){
    $pname = $row_pname["pname"];
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
            echo $pname;?> - 國立高雄大學場地借用系統</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    
</body>
</html>