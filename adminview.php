<?php
include 'session_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
  <h1> bienvenido admin <?php echo $_SESSION['user'];?><h1>
  <a href="login.php"> volver </a>
</body>
</html>