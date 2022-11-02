<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="login">
            <div class="l">
                <form action="" class="login__create " autocomplete="off" method="post" id="login-up">
                <input type="hidden" id="action" value="login">
                    <h1 class="login__title">Welcom back</h1>
                     <div class="login__box">
                     <?php if (isset($_GET['error'])) { ?>
     	                	    <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>
                       <i class='bx bx-at login__icon'></i>
                         <input type="email" name="user" id="username" placeholder="Email" required class="login__input">
                     </div>

                    <div class="login__box">
                      <i class='bx bx-lock-alt login__icon'></i>
                     <input type="password" name="password" id="password" placeholder="Password" required class="login__input">
                     </div>
                     <button type="submit" class="form-btn"  style="margin-left: 20vh " onclick="submitData();">Login</button>
                     
                    <div>
                        <span class="login__account">New user ?</span>
                        <a href="register.php" class="login__signup">Register now</a>
                    </div>
                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                    </div>

                </form>
            </div>
    </div> 
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
</body>
</html>
