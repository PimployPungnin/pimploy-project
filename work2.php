<<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard GGEZ</title>
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <h1 style="text-align: center;">Webboard GGEZ</h1>
    <hr>
    หมวดหมู่:
        <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">--เรื่องทั่วไป--</option>
            <option value="study">--เรื่องเรียน--</option>
    </select>
    <div style="float:right">
        <a href="login.php">เข้าสู่ระบบ</a>
    </div>
    <br>
    <form action="post.php" method="get">
    <?php 
        for($i=1;$i<=10;$i++){
            echo "<li><a href='post.php?id=$i'>กระทู้ $i</a></li>";
        }
    ?>
    </form>
</body>
<?php
    }else{
?>
<body>
    <h1 style="text-align: center;">Webboard GGEZ</h1>
    <hr>
    หมวดหมู่:
        <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">--เรื่องทั่วไป--</option>
            <option value="study">--เรื่องเรียน--</option>
    </select>
    <div style="float:right">
        <a href="logout.php">ออกจากระบบ</a>
    </div>
    <br>
    <form action="post.php" method="get">
    <?php 
        for($i=1;$i<=10;$i++){
            echo "<li><a href='post.php?id=$i'>กระทู้ $i</a></li>";
        }
    ?>
    </form>
</body>
<?php
    }
?>
</html>