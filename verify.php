<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align="center">Webboard</h1>
    <hr>
    <div align="center">
        <?php
            $login=$_POST['login'];
            $pwd=$_POST['pwd'];
            if($login=="admin" && $pwd=="admin123")
                echo "ยินดีต้อนรับ Admin";
            elseif($login=="member" && $pwd=="mem1234")
                echo "ยินดีต้อนรับ Member";
            else
                echo "User Password ไม่ถูกต้อง";
            echo "<br><a href='index.php'>กลับสู่หน้าหลัก</a>";
            ?>
    </div>
</body>
</html>