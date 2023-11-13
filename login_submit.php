<?php
include 'common.php';

    $e = $_POST['email'];
    $p = $_POST['password'];

    $sql=" SELECT * FROM `users` WHERE email='$e' AND password='$p'";
    $result=mysqli_query($dbc,$sql);
    if(mysqli_num_rows($result)==0){
        ?>
            <script>
                alert("Incorrect username or Password");
                location.href="signlog.php";
            </script>
        <?php
    }
    else{
        session_start();
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION["email"]=$row["email"];
        $_SESSION["uid"]=$row["id"];
        $_SESSION["name"]=$row["name"];
        header('location: index.php');
    }
?>