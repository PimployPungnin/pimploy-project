<?php
session_start();
    if(isset($_SESSION['id'])){
        header("location:work2.php");
        die();
    }
?>

<?php
    $login=$_POST['Login'];
    $pwd=$_POST['Password'];
    if($login=="admin" && $pwd=="admin123"){
        $_SESSION['username']='admin';
        $_SESSION['role']='a';
        $_SESSION['id']=session_id();
        header("location:work2.php");
        }
    elseif($login=="member" && $pwd=="mem1234"){
        $_SESSION['username']='member';
        $_SESSION['role']='m';
        $_SESSION['id']=session_id();
        header("location:work2.php");
        }
        else
        $_SESSION['error']='error';
        header("location:login.php");
        die();
            ?>
    </div>
