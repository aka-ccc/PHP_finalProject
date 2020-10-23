<?php
session_start();
ob_start();
include("link.php");
include("header.php");
if(isset($_POST["nowpsd"])){
    $psd = $_POST["nowpsd"];
    if($_POST["newpsd"]!=''){
        $npsd = $_POST["newpsd"];
        $npsdck = $_POST["newpsdcheck"];
        if($npsd == $npsdck){
            $ID = $_SESSION["uid"];
            $name = $_POST["name"];
            $mail = $_POST["email"];
            $phone = $_POST["phone"];
            $SQL = "UPDATE user SET paswd = '$npsd', name = '$name', phone = '$phone', email = '$mail' WHERE uid = '$ID'";
            if($result = mysqli_query($link, $SQL)){
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["phone"] = $_POST["phone"];
                $_SESSION["paswd"] = $npsd;
                echo "<script>alert('會員資料更新成功!!')</script>";
            }else{
                echo "<script>alert('會員資料更新失敗!!')</script>";
            }
        }else{
            echo "<script>alert('兩次輸入密碼不同，請重新輸入!')</script>";
            header("refresh:1 ; url= user.php");
        }
    }else{
        $ID = $_SESSION["uid"];
        $name = $_POST["name"];
        $mail = $_POST["email"];
        $phone = $_POST["phone"];
        $SQL = "UPDATE user SET name = '$name', phone = '$phone', email = '$mail' WHERE uid = '$ID'";
        if($result = mysqli_query($link, $SQL)){
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["phone"] = $_POST["phone"];
            echo "<script>alert('會員資料更新成功!!')</script>";
        }else{
            echo "<script>alert('會員資料更新失敗!!')</script>";
        }
    }

}
if(isset($_SESSION["uid"])){
    echo "<div class='regis'>";
    echo "<h2>會員資料修改</h2>";
    echo "<form action='user.php' method = 'POST'>";
    echo "<label>使用者名稱：</label>";
    echo "<input type='text' name = 'name' value = '".$_SESSION['name']."' required><br/>";
    echo "<label>連絡電話：</label>";
    echo "<input type='tel' name = 'phone' value = '".$_SESSION['phone']."' required><br/>";
    echo "<label>E-mail：</label>";
    echo "<input type='email' name = 'email' value = '".$_SESSION['email']."' required><br/>";
    echo "<label>現在的密碼：</label>";
    echo "<input type='password' name = 'nowpsd' required><br/>";
    echo "<label>新密碼：</label>";
    echo "<input type='password' name = 'newpsd'><br/>";
    echo "<label>確認新密碼：</label>";
    echo "<input type='password' name = 'newpsdcheck'><br/>";
    echo "<input type='submit' value ='確認送出' class='submit'>";
    echo "</form>";
    echo "</div>";
}else{
    echo "<script>alert('不要投機取巧，乖乖登入!!')</script>";
    header("refresh:0.2 ; url= home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理 - 國立高雄大學空間借用系統</title>
</head>
<body>
    
</body>
</html>