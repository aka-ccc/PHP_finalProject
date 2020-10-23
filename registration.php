<?php
session_start();
ob_start();
include("link.php");
include("header.php");
if(isset($_POST["paswd"])){
    $pwd = $_POST["paswd"];
    $pwdcheck = $_POST["paswdcheck"];
    if($pwd != $pwdcheck){
        echo "<script>alert('兩次輸入的密碼不同，請重新註冊!!')</script>";
        header("refresh:0.2 ; url = registration.php");
    }
    if($pwd == $pwdcheck){
        $sid = $_POST["sid"];
        $sname = $_POST["sname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $depart = $_POST["depart"];
    
        $SQL = "INSERT INTO user(sid,paswd,name,phone,email,depart) VALUES('$sid','$pwd','$sname','$phone','$email','$depart')";
        
    
        if($result = mysqli_query($link ,$SQL)){
            echo "<script>alert('註冊成功!!為您跳轉首頁!!')</script>";
            header("refresh:0.2 ; url = index.php");
        }else{
            $SQL = "SELECT sid FROM user WHERE sid = '$sid'";
            if($result = mysqli_query($link ,$SQL)){
                echo "<script>alert('此帳號已被註冊，請重新註冊!!')</script>";
                // header("refresh:0.2 ; url = registration.php");
                echo $sid;
            }else{
                echo "<script>alert('註冊失敗，請重新註冊!!')</script>";
                header("refresh:0.2 ; url = registration.php");
            }
        }
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊使用者 - 國立高雄大學空間借用系統</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
<form action="registration.php" method = "POST">
    <div class="regis">
        <h2>申請帳號</h2>
        <label>帳號：</label>
        <input type="text" name = sid placeholder="A10733XX" required></br>
        <label>密碼：</label>
        <input type="password" name = paswd required></br>
        <label>確認密碼：</label>
        <input type="password" name = paswdcheck required></br>
        <label>姓名：</label>
        <input type="text" name = sname placeholder="王小明" required></br>
        <label>聯絡電話（手機）：</label>
        <input type="tel" name = phone pattern="[0-9]{10}" required></br>
        <label>E-mail：</label>
        <input type="email" name = email required></br>
        <label>所屬單位：</label>
        <select name="depart">
            <option value="CHSS">人文社會科學院</option>
            <option value="LAW">法學院</option>
            <option value="MANAGEMENT">管理學院</option>
            <option value="SCIENCE">理學院</option>
            <option value="ENG">工學院</option>
            <option value="FACULTY">教職員工</option>
        </select></br>
        <input type="submit" value="確認送出" class="submit">
    </div>
</form>
</body>
</html>
