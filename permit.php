<?php
session_start();
ob_start();
include("link.php");
include("header.php");
?>
<html>
    <script LANGUAGE="JavaScript">
        function openwin() {
            window.open ("period.html", "時間對照表", "height=550, width=250, top=150, left=10,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
        } 
    </script>
</html>
<?php
if(isset($_SESSION["uid"])){
if($_SESSION["auth"]==1 or $_SESSION["auth"]==3){
    $SQL = "SELECT * FROM apply a JOIN place p ON a.pnum = p.pnum ,user u WHERE u.uid = a.uid ORDER BY a.date DESC";
    $result = mysqli_query($link, $SQL);
    echo "<a href = '#' class='openQQ' onclick = 'openwin()'>"."開啟時間對照表"."</a><br/>";
    echo "<div class='tablediv'>";
    echo "<table>";
    echo "<tr>";
    echo "<td class='tdss'>場地名稱</td>";
    echo "<td class='tdss'>借用日期</td>";
    echo "<td class='tdss'>借用時段</td>";
    echo "<td class='tdss'>申請人</td>";
    echo "<td class='tdss'>審核狀態</td>";
    echo "<td class='tdss'>繳費狀態</td>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)){
        if($row['admit'] == 0){
            $admit='審核中';
        }else{
            $admit='審核通過';
        }
        if($row['pay']==0){
            $pay ='未繳費';
        }else{
            $pay='已繳費';
        }
        echo "<tr>";
        echo "<td class='td'>".$row['pname']."</td>";
        echo "<td class='td'>".$row['date']."</td>";
        echo "<td class='td'>".$row['period']."</td>";
        echo "<td class='td'>".$row['name']."</td>";
        echo "<form action = 'admit.php?anum=".$row['anum']."' method = 'POST'>";
        echo "<td class='td'>".$admit."<input type = 'submit' value='更改'>"."</td>";
        echo "</form>";
        echo "<form action = 'pay.php?anum=".$row['anum']."' method = 'POST'>";
        echo "<td class='td'>".$pay."<input type = 'submit' value='更改'>"."</td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}else{
    echo "<script>alert('非法進入，滾!')</script>";
    header("refresh:0.2;url=index.php");
}
}else{
    echo "<script>alert('您尚未登入!')</script>";
    header("refresh:0.2;url=login.php");
}
?>
<html>
    <title>借用審核 - 國立高雄大學場地借用系統</title>
    <link rel="stylesheet" href="header.css">
</html>