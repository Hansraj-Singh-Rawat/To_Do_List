<?php
include 'common.php';
if (!isset($_SESSION['email'])) {
    header('location: signlog.php');
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style4.css">


    <title>To-Do List</title>
</head>
<body>
    <script src="script.js"></script>
    <?php
        include 'includes/header.php';
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `Tasks` WHERE 1";
        $result = mysqli_query($dbc, $sql); 
        $no = mysqli_num_rows($result);
        $sql = "SELECT * FROM `Tasks` WHERE email='$email';";
        $resultE = mysqli_query($dbc, $sql); 
        $noe = mysqli_num_rows($resultE);
        if($noe == 0){
        ?>
            <div class="logFlex" style="text-align: center; font-family: cursive;">
                <p><h1><u style="color: grey">No work To Do<br>Want to add? </u><br><button onclick="location.href='addTask.php';" class="btn btn-primary btn-danger">Click Here!</button></h1></p>
            </div>
    <?php
        }else{
            ?>
            <div class="cover_container">
            <div class="grid-container">
                <?php
                    for ($i=1; $i <= $no; $i++) {
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $email = $row['email'];

                        if ($email == $_SESSION['email']){
                            $Task_Name= $row['Task_Name'];
                            $Date = $row['Date'];
                            $Time = $row['Time'];
                            $Description = $row['Description'];
                            $priority = $row['priority'];
                            ?>
                            <div class="grid-item" >
                            <div class="card text-center" style="border-radius: 50px; background-color: transparent;">
                            <?php
                            if ($priority == 1) {
                                ?>
                                <div class="card-body" style="border-radius: 50px; background-color: #FF6361;">
                                <?php
                            }
                            elseif ($priority == 2){
                                ?>
                                <div class="card-body" style="border-radius: 50px; background-color: #BC5090;">
                                <?php
                            }
                            elseif ($priority == 3){
                                ?>
                                <div class="card-body" style="border-radius: 50px; background-color: #D2D462; border-color:">
                                <?php
                            }
                            elseif ($priority == 4){
                                ?>
                                <div class="card-body" style="border-radius: 50px; background-color: #6F975C;">
                                <?php
                            }
                            elseif ($priority == 5  ){
                                ?>
                                <div class="card-body" style="border-radius: 50px; background-color: #494CA2;">
                                <?php
                            }
                            else {
                                ?>
                                <div class="card-body">
                                <?php
                            }
                            ?>
                            
                                <div class="thead">
                                    <?php echo($Task_Name)?>
                                    <h4>Priority: <?php echo($priority)?></h4>
                                </div>
                                <i>
                                <h5 class="card-title"><?php echo($Description)?></h5>
                                <a  href="update.php?id=<?php echo $row['taid']?>" class="btn btn-light"><b>Update</b></a>
                                <a  href="removeTask.php?id=<?php echo $row['taid']?>" class="btn btn-light"><b>Delete</b></a>
                                <p><h6>To Complete By: <?php echo($Date)?> <?php echo($Time) ?></h6></p>
                                </i>
                                </div>
                                </div>  
                            </div>
                            <?php
                        }
                        
                    }
                ?>
            </div>
            </div>
            <?php
        }
    ?>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>