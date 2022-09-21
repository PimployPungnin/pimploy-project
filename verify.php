<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align="center">Webboard GGEZ</h1>
    <hr>
    <div align="center">
        <?php
            $login=$_POST['login'];
            $password=$_POST['password'];
            if($login=="admin" && $password=="admin123")
                echo "ยินดีต้อนรับ Admin";
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
            elseif($login=="member" && $password=="mem1234")
                echo "ยินดีต้อนรับ Member";
                $_SESSION['username']='member';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
            else
                echo "User Password ไม่ถูกต้อง";
            echo "<br><a href='index.php'>กลับสู่หน้าหลัก</a>";
            ?>
    </div>
</body>
</html>