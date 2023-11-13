function confirmBoxUsers() {
    if (confirm("Do You want to Delete Your Account Permanently?")) {
        location.href='deleteUser.php';
      } else {
        location.href='index.php';
      }
}

function deleteTask() {
    if (confirm("Do You want to remove this Task?")) {
        location.href='removeTask.php';
      } else {
        location.href='index.php';
      }
}

