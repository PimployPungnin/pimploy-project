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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class=container>
    <h1><center>Webboard GGEZ</center></h1>
    <?php include "nav.php" ?>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card-header">เข้าสู่ระบบ</div>
            <div class="card-body">
                <form action="verify.php" method="post">
                    <div class="from-group">
                        <label>Login:</label>
                        <input type="text" name="login" class="form-content">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <form action="verify.php" method="post">
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2">เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td><td><input type="text" name="Login" size="60"></td></tr>
        <tr><td>Password</td><td><input type="password" name="Password" size="60"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Login" ></td></tr>
    </table>
    </form>
    <br> <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>
    </div>
</body>
</html>