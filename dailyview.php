<?php
session_start();
ob_start();
include("link.php");
include("header.php");
if(isset($_SESSION["uid"])){

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
    <title>單日活動借用查詢 - 國立高雄大學空間借用系統</title>
</head>
<body>
    <script LANGUAGE="JavaScript">
        function openwin() {
            window.open ("period.html", "時間對照表", "height=550, width=250, top=150, left=1200,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
        } 
    </script>
    <div class="wrap">
    <form action="dailyview.php" method = "POST">
        <div class="iii">
        <label class='label'>查詢日期：</label>
        <?php
        $final = date("Y-m-d",strtotime("+30 day"));
        echo "<input type='date' max ='".$final."' name='date'>";
        ?>
        <input type="submit" value = "查詢"><br/>
        </div>
        <?php
        if(isset($_POST["date"])){
            $date = $_POST["date"];
            $SQL = "SELECT * FROM apply a JOIN place p ON a.pnum = p.pnum WHERE a.date = '$date' ORDER BY p.pname DESC";
            $result = mysqli_query($link, $SQL);
        
        echo "<a href = '#' onclick = 'openwin()'>"."開啟時間對照表"."</a><br/>";
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
    }
        ?>
    </form>
    </div>
</body>
</html>