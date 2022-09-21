<?php
    session_start();
    session_destroy();
    header("location:work2.php");
    die();

?>