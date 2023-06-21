<?php
@session_start();
if (array_key_exists('username', $_SESSION) && array_key_exists('username', $_COOKIE)) {
  header('location:shikharAdventure/dashboard.php');
}
include('class/user.class.php');

$userObject = new User();
$error = [];

if (isset($_POST['submit'])) {
  if (isset($_POST['username']) && !empty($_POST['username'])) {
    $userObject->username = $_POST['username'];
  } else {
    $error['username'] = "This field is required!";
  }
  if (isset($_POST['password']) && !empty($_POST['password'])) {
    $userObject->password = $_POST['password'];
  } else {
    $error['password'] = "This field is required!";
  }

  if (count($error) < 1) {
    $status =  $userObject->login();
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="images/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="/manifest.webmanifest">

  <title>Admin - Shikhar Adventure</title>
</head>

<body>

  <div class="content">
    <div class="logo"><img src="images/logo.png" alt=""></div>
    <form class="loginForm" id="loginForm" method="post" action="">
      <div class="form-content">
        <div class="txt_field">
          <h4>USERNAME</h4>
          <input type="text" name="username" id="username" placeholder="Enter Your Username!" required>
        </div>

        <div class=" txt_field">
          <h4>PASSWORD</h4>
          <input type="password" name="password" id="password" placeholder="Enter Your Password!" required>
        </div>

        <?php
        if (isset($status)) {
          echo "<small>$status</small>";
        }
        ?>
        <div class="remember_me">
          <input type="checkbox" id="remember_me" name="remember_me" value="">
          <label for="remember_me">Remember Me</label>
        </div>
        <input type="submit" name="submit" value="Log In">
      </div>
    </form>
    <div class="forgot">
      <a href="">Forgot Password?</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>

</html>