<?php

date_default_timezone_set('Asia/Taipei');
echo "<div class='wrap'>";
if(isset($_SESSION["name"])){
    if($_SESSION["auth"]==0){
        echo "歡迎回來".$_SESSION["name"]."<br/>";
        echo "<div id='bg' class='listdivQQ'>";
        echo "<a href='index.php'><img src='http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg' height=50px></a>"; 
        echo "<a href='apply.php' class='listfirstQQ'>借用申請</a>";
        echo "<a href='browseview.php' class='list'>借用總覽</a>";
        echo "<a href='personalview.php' class='list'>個人借用查詢</a>";
        echo "<a href='user.php' class='list'>使用者管理</a>";
        echo "<a href='logout.php' class='list'>登出</a>";
        echo "</div>";
    }
    if($_SESSION["auth"]==1){
        echo "歡迎回來".$_SESSION["name"]."<br/>";
        echo "<div id='bg' class='listdivQ'>";
        echo "<a href='index.php'><img src='http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg' height=50px></a>"; 
        echo "<a href='permit.php' class='listfirstQ'>借用審核</a>";
        echo "<a href='apply.php' class='listQ'>借用申請</a>";
        echo "<a href='browseview.php' class='listQ'>借用總覽</a>";
        echo "<a href='personalview.php' class='listQ'>個人借用查詢</a>";
        echo "<a href='dailyview.php' class='listQ'>單日活動借用查詢</a>";
        echo "<a href='user.php' class='listQ'>使用者管理</a>";
        echo "<a href='logout.php' class='listQ'>登出</a>";
        echo "</div>";
    }
    if($_SESSION["auth"]==3){
        echo "歡迎回來".$_SESSION["name"]."<br/>";
        echo "<div id='bg' class='listdivQQQ'>";
        echo "<a href='index.php'><img src='http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg' height=50px></a>"; 
        echo "<a href='permit.php' class='listfirstQQQ'>借用審核</a>";
        echo "<a href='apply.php' class='list'>借用申請</a>";
        echo "<a href='browseview.php' class='list'>借用總覽</a>";
        echo "<a href='personalview.php' class='list'>個人借用查詢</a>";
        echo "<a href='dailyview.php' class='list'>單日活動借用查詢</a>";
        echo "<a href='user.php' class='list'>使用者管理</a>";
        echo "<a href='alluser.php' class='list'>會員資料總覽</a>";
        echo "<a href='statistic.php' class='list'>統計資料分析</a>";
        echo "<a href='logout.php' class='list'>登出</a>";
        echo "</div>";
    }
}else{
    echo "<div id='bg' class='listdiv'>";
    echo "<a href='index.php'><img src='http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg' height=50px></a>"; 
    echo "<a href='apply.php' class='listfirst'>借用申請</a>";
    echo "<a href='browseview.php' class='list'>借用總覽</a>";
    // echo "<a href='dailyview.php'>單日活動借用查詢</a>|";
    // echo "<a href='place.php'>空間資料查詢</a>|";
    echo "<a href='registration.php' class='list'>申請帳號</a>";
    echo "<a href='login.php' class='list'>借用登入</a>"."<br/>";
    echo "</div>";
}
echo "</div>";
?>
<html>
    <link rel="stylesheet" href="header.css">
</html>
