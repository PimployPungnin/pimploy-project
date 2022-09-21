<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Webboard GGEZ</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข 
        <?php echo $_GET["id"];?><br>
        <?php
            if($_GET["id"]%2==0)
                echo"กระทู้หมายเลขคู่";
            else
                echo"กระทู้หมายเลขคี่";
        ?><br>
        <table style="border:2px solid black; width:40%" align="center">
        <tr>
            <td style="background-color: #6CD2FE;" align="center">แสดงความคิดเห็น</td>
        </tr>
        <tr>
            <td><textarea name="" id="" cols="80" rows="3"></textarea></td>
        </tr>
            <td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td>
        </tr>
    </table>
    <br>
    <a href="work2.php" align="center">กลับสู่หน้าหลัก</a>
    </div>
</body>
</html>