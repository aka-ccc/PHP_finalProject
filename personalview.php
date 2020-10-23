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

if(isset($_SESSION["uid"])){
    $uid = $_SESSION["uid"];
    $SQL = "SELECT * FROM apply a JOIN place p ON a.pnum = p.pnum WHERE uid = '$uid'";
    $result = mysqli_query($link, $SQL);
    echo "<div class='wrap'>";
    echo "<div class='QQQQQdivQQ'>";
    echo "<a href = '#' class='open' onclick = 'openwin()'>"."開啟時間對照表"."</a><br/>";
    echo "<h2 class='ll'>我借用的場地</h2></br>";
    echo "<table class='browseQQ'>";
        echo "<tr>";
        echo "<td class='tdss'>場地名稱</td>";
        echo "<td class='tdss'>借用日期</td>";
        echo "<td class='tdss'>借用時段</td>";
        echo "<td class='tdss'>審核狀態</td>";
        echo "<td class='tdss'>繳費狀態</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){ 
            if($row["admit"]==0){
                $admit = '審核中';
            }
            if($row["admit"]!=0){
                $admit = '審核通過';
            }
            if($row["pay"]==0){
                $pay = '未繳費';
            }
            if($row["pay"]!=0){
                $pay = '已繳費';
            }
            echo "<tr>";
            echo "<td class='td'>".$row['pname']."</td>";
            echo "<td class='td'>".$row['date']."</td>";
            echo "<td class='td'>".$row['period']."</td>";
            echo "<td class='td'>".$admit."</td>";
            echo "<td class='td'>".$pay."</td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "</div>";
    echo "</div>";
}else{
    echo "<script>alert('您尚未登入!!請不要作弊')</script>";
    header("refresh:0.2 ; url= index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人借用查詢 - 國立高雄大學空間借用系統</title>
</head>
<body>
    
</body>
</html>