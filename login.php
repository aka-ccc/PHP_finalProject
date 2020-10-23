<?php
session_start();
ob_start();
include("link.php");
include("header.php");

if(isset($_POST["userid"])){
    $ID=$_POST["userid"];
    $PSWD=$_POST["pswd"];

    $SQL = "SELECT * FROM user u WHERE u.sid = '$ID' AND u.paswd = '$PSWD'";

    $result = mysqli_query($link ,$SQL);
    
    
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION["uid"]=$row["uid"];
        $_SESSION["paswd"]=$row["paswd"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["auth"]=$row["auth"];
        $_SESSION["phone"]=$row["phone"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["depart"]=$row["depart"];
        $uid = $row["uid"];
        $SQL_add = "UPDATE user SET logintimes = logintimes + 1 WHERE uid = '$uid'";
        mysqli_query($link ,$SQL_add);
    }if(isset($_SESSION["uid"])){
        header('Location: index.php');
    }else{
        echo "帳號或密碼錯誤，請重新輸入！";
        header("refresh:1 ; url = login.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者登入 - 國立高雄大學空間借用系統</title>
</head>
<body>
    <div class="regis">
        <h2>登入</h2>
        <form action="" method = "POST">
            <label>帳號：</label>
            <input type="text" name = "userid" require><br/>
            <label>密碼：</label>
            <input type="password" name = "pswd" require><br/>
            <input type="submit" value = "登入" class="submit">
        </form>
        <a href="registration.php" class="submitQQ">申請帳號</a>
    </div>
</body>
</html>
