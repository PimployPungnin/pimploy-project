<?php
session_start();
    if(isset($_SESSION['id'])){
        header("location:work2.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard GGEZ</title>
    <styl>
    </style>
</head>
<body>
    <h1><center>Webboard GGEZ</center></h1>
    <hr>
    <br>
    <form action="verify.php" method="post">
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2">เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td><td><input type="text" name="Login" size="60"></td></tr>
        <tr><td>Password</td><td><input type="password" name="Password" size="60"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Login" ></td></tr>
    </table>
    </form>
    <br> <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>
</body>
</html>