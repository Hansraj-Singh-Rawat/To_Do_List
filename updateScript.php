<?php
include 'common.php';

$tid = $_GET['tid'];
$tname = $_POST['tname'];
$email = $_SESSION['email'];
$priority = $_POST['priority'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];

$sql="SELECT * FROM `Tasks` WHERE 1";
$result=mysqli_query($dbc,$sql);
$sql = "UPDATE `Tasks` SET `taid`='$tid',`email`='$email',`Task_Name`='$tname',`Date`='$date',`Time`='$time',`Description`='$description',`priority`='$priority' WHERE taid='$tid'";
mysqli_query($dbc, $sql);
header('location: index.php');
?>