<?php
include 'common.php';
?>
<script>
    if (confirm("Do You want to remove this Task?")) {
        <?php
          $taname = $_GET['id'];
          $sql = "DELETE FROM `Tasks` WHERE taid='$taname'";
          mysqli_query($dbc, $sql);
          $sql = "SET  @num := 0;";
          mysqli_query($dbc, $sql);
          $sql = "UPDATE Tasks SET taid = @num := (@num+1);";
          mysqli_query($dbc, $sql);
          $sql = "ALTER TABLE Tasks AUTO_INCREMENT =1;";
          mysqli_query($dbc, $sql);   
        ?>
    } else {
        location.href='index.php';
    }
  alert("Successfully Removed.");
  location.href='index.php';
</script>
<?php
?>