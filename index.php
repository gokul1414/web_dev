<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!--- ////////////// HTML FOR WELCOME PAGE/////////////////!--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Home

    </title>
</head>
<body>
    <div class="login">
      <form action="" class="login__create " autocomplete="off" method="post" id="login-up">
        <h1>Welcome   <?php echo $user["name"]; ?> ,You have Successfully Logged in</h1>
        <a href="logout.php" class="login__button_login">Logout</a>
      </form>
    </div> 
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
</body>
</html>
