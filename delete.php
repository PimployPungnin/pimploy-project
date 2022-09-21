<?php
    session_start();
    if($_SESSION['role']!='a'){
        header("location:work2.php");
        die();
    }else{
        echo "ลบกระทู้ หมายเลข $_GET[id]";
    }
?>