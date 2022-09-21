<?php
session_start();
    if(!isset($_SESSION['id'])){
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
    <title>newpost</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard GGEZ</h1>
    <hr>
    <?php
        echo "ผู้ใช้งานระบบ. $_SESSION[username]";
    ?>
    <form action="work2.php" method="post">
    หมวดหมู่:
        <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">--เรื่องทั่วไป--</option>
            <option value="study">--เรื่องเรียน--</option>
        </select>
        <table>
        <tr><td>หัวข้อ</td><td><input type="text" size="30"></td></tr>
        <tr><td>เนื้อหา</td><td><input type="text" size="30"></td></tr>
        <tr><td></td> <td><input type="submit" value="บันทึกข้อความ" ></td></tr>
    </table>
    </form>
</body>
</html>