<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}

 ///JSON FILE (link with--- data.json)
$con= mysqli_connect("localhost", "root", "", "loginregister");
$resuleset=mysqli_query($con,"SELECT * FROM  tb_user");
$json_array=array();
while($row=mysqli_fetch_assoc($resuleset))
{
  $json_array[]=$row;
}
$encoded_data=json_encode($json_array,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('data.json',$encoded_data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
    <div class="login">
                <form action="" class="login__create " method="post" id="login-up">
                <input type="hidden" id="action" value="register">
                    <h1 class="login__title">Create Account</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="name" id="name" name="name" required class="login__input">
                    </div>

                    <div class="login__box">
                       <i class='bx bx-at login__icon'></i>
                         <input type="text" placeholder="Email" id="username" required name="email" class="login__input">
                     </div>

                    <div class="login__box">
                      <i class='bx bx-lock-alt login__icon'></i>
                     <input type="password" placeholder="Password" id="password" name="password" required class="login__input">
                     </div>
                     <button type="submit" class="form-btn" style="margin-left: 20vh " onclick="submitData();">Register</button>

                    <div>
                        <span class="login__account">Already have an Account ?</span>
                        <p><a class="login__signup" id="sign-in" href="login.php">Sign In</a></p>
                        
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                    </div>

                </form>
    </div>
    <?php require 'script.php'; ?>
</body>
</html>