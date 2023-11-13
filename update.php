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

    <title>Update Task</title>
</head>
<body>
    <?php
        include 'includes/header.php';
        $tid = $_GET['id'];
    ?>
    <div class="logFlex" style="backdrop-filter: blur(5px);">
            <div class="logbody">
                <div class="card text-dark mb-3">
                    <div class="card-header" >Update Task</div>
                    <div class="card-body">
                    <form action="updateScript.php?tid=<?php echo $tid ?>" method="post">
                        <div class="mb-3">
                            <label for="Task Name" class="form-label">Task Name</label>
                            <input name="tname" type="text" class="form-control" id="Task name" aria-describedby="text" required>
                        </div>
                        <div style="background-color: while;">
                            <label for="deadline" class="form-label">To-Do By</label>
                            <div class="mb-3">
                                <label for="date">Date:</label>
                                <input name="date" type="date" id="date" class="form-control" required> 
                            </div>
                            <div class="mb-3">
                                <label for="appt">Time:</label>
                                <input type="time" id="appt" name="time" class="form-control" required> 
                            </div>
                            <div class="mb-3">
                                <label for="priority">Priority</label>
                                <input type="number" id="priority" min="0" max="5" name="priority" placeholder="Enter between 0-5" class="form-control" required> 
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description of Work</label>
                            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" class="btn btn-secondary">Update</button>
                        </div>
                    </form> 
                    </div>
                </div>
            </div>
        </div>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>