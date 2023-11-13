<?php
    include 'common.php';
    session_start();
    if (!isset($_SESSION['email']) && $_SESSION['email'] != 1)
    {
        header('location: index.php');
    }
    else{
        session_destroy();
        header('location: index.php');
    }
?>