<?php
session_start();
ob_start();
include("link.php");
include("header.php");
if(isset($_SESSION["uid"])){
if($_SESSION["auth"]==3)
if(isset($_GET["no"])){
$no = $_GET["no"];
if($no == 1){
    $SQL = "SELECT * FROM period GROUP BY num";
}else if($no == 2){
    $SQL = "SELECT *,COUNT(*) as times FROM apply a JOIN place p ON a.pnum = p.pnum GROUP BY p.pname ORDER BY times DESC LIMIT 10";
}else if($no == 3){
    $SQL = "SELECT * FROM user GROUP BY sid ORDER BY logintimes DESC LIMIT 10";
}
}
}else{
    echo "<script>alert('您尚未登入!')</script>";
    header("refresh:0.2;url=login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統計資料分析 - 國立高雄大學場地借用系統</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['<?php
            if($no == 1){
                echo "Period";
            }else if($no == 2){
                echo "Place";
            }else if($no == 3){
                echo "User";
            }?>', 'Times'],

        <?php
        $result = mysqli_query($link, $SQL);
        if($no == 1){
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$row['num']."',".$row['times']."],";
            }
        }else if($no == 2){
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$row['pname']."',".$row['times']."],";
            }
        }else if($no == 3){
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$row['sid']."',".$row['logintimes']."],";
            }
        }
            
        ?>

        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: '<?php
                                if($no == 1){
                                    echo "時段活躍度";
                                }else if($no == 2){
                                    echo "空間活躍度";
                                }else if($no == 3){
                                    echo "使用者活躍度";
                                }
                            ?>'},
          //          subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Times'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
</head>
<body>
    <ul class='ggg'>
          <li class='bbb'><a href = 'statistic.php?no=1'>時段活躍度</a></li>
          <li class='bbb'><a href = 'statistic.php?no=2'>空間活躍度</a></li>
          <li class='bbb'><a href = 'statistic.php?no=3'>使用者活躍度</a></li>
    </ul>
    <?php
    if(isset($_GET["no"])){
        echo "<div id='top_x_div' class='gg' style='width: 900px; height: 500px;'></div>";
    }else{

    }
    ?>
    <!-- <div id="top_x_div" style="width: 900px; height: 500px;"></div> -->
</body>
</html>