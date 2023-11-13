<nav class="navbar navbar-expand-lg navbar-light" style="background-color: grey;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">To-Do List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addTask.php"><img src ="IMAGES/add.png" width="30">Add Task</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src ="IMAGES/settings.png" width="30">
            Settings
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="text-align: center;">
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
            <li><a class="dropdown-item" onclick="confirmBoxUsers()">Delete Account</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><img src ="IMAGES/home.png" width="30">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>