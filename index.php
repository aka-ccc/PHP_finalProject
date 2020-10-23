<?php
session_start();
ob_start();
include("link.php");
include("header.php");
echo "<div class='wrap'>";
$now = date("Y-m-d");
$SQL = "SELECT * FROM info i JOIN user u ON i.uid = u.uid WHERE i.deadline >= '$now' AND i.visible = 1 ORDER BY i.top DESC,i.num DESC";
$result = mysqli_query($link, $SQL);
echo "<div class='wrap'>";
echo "<h2 class='h2QQ'>最新消息</h2>";

echo "<div class='tablediv'>";
echo "<table>";
echo "<tr>";
echo "<td class='tableQQ'>置頂</td>";
echo "<td class='tableQQ'>標題</td>";
echo "<td class='tableQQ'>發布者</td>";
echo "<td class='tableQQ'>發布日期</td>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){ 
    echo "<tr>";
    if($row['top']==1){
        echo "<td class='td'>*</td>";
    }else{
        echo "<td class='td'></td>";
    }
    echo "<td class='td'><a href ='content.php?no=".$row['num']."'>".$row['title']."</a></td>";
    echo "<td class='td'>".$row['name']."</td>";
    echo "<td class='td'>".$row['init_date']."</td>"; 
    echo "</tr>";
}
echo "</table>";
if(isset($_SESSION["uid"])){
if($_SESSION["auth"]==1 or $_SESSION["auth"]==3){
    echo "<a href ='add.php' class='ppp'>新增公告</a>";
}
}else{}
echo "</div>";
echo "</div>";
echo "</div>";
?>
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>國立高雄大學空間借用系統</title>
        <link rel="stylesheet" href="header.css">
    </head>
    <body>
    </body>
    </html>
</html>