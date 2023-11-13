<?php
include 'common.php';
?>
<script src="script.js"></script>
<?php
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$email = $_SESSION['email'];

$sql = "DELETE FROM `Tasks` WHERE email='$email'";
mysqli_query($dbc, $sql);
$sql = "SET  @num := 0;";
mysqli_query($dbc, $sql);
$sql = "UPDATE Tasks SET taid = @num := (@num+1);";
mysqli_query($dbc, $sql);
$sql = "ALTER TABLE Tasks AUTO_INCREMENT =1;";
mysqli_query($dbc, $sql);



$sql = "DELETE FROM `users` WHERE email='$email'";
mysqli_query($dbc, $sql);
$sql = "SET  @num := 0;";
mysqli_query($dbc, $sql);
$sql = "UPDATE users SET uid = @num := (@num+1);";
mysqli_query($dbc, $sql);
$sql = "ALTER TABLE users AUTO_INCREMENT =1;";
mysqli_query($dbc, $sql);
?>
<script>
    alert("User Successfully Removed.");
    location.href='logout.php';
</script>
<?php
?>