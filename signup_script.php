<?php
include 'common.php';

if (!$dbc){
    die("Cannot Connect: ". mysqli_connect_error());
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $count = "SELECT * FROM `users`";
    $val = mysqli_query($dbc, $count);
    $id = mysqli_num_rows($val) + 1;

    $sql = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($dbc, $sql);
    if(mysqli_num_rows($result)>0){
        echo "Email address already exists.";
        header('location: signlog.php');
    }
    else{
        $sq = "INSERT INTO `users`(`uid`, `name`, `email`, `password`) VALUES ('$id','$name','$email', '$password')";
        $r = mysqli_query($dbc, $sq);

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $id;
        header('location: index.php');
    }
}
?>