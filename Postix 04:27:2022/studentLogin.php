<?php

include 'proc_stulogin.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Login</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix Student Login</a></div>
    </div>
    <form action="" method="post">
      <label for="email">Email</label>
      <input
        type="text"
        name="email"
        id="email"
        placeholder="Enter email (must contain .edu)"
        pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu)"
        required
        title="Sorry, only email addresses ending in .edu are allowed."
      />
      <label for="psw">Password</label>
      <input
        type="password"
        name="psw"
        id="psw"
        placeholder="Enter password"
        pattern=".{8,20}"
        required
        title="Password should be 8 to 20 characters long."
      />

      <a href="index.html">Back to Home</a>
      <button type="submit" name="login" id="login">Log In!</button>
      <a href="studentSignUp.php">Sign Up!</a>

      <div style="font-size: 30px; text-align: center">
        <strong><?php echo $error;?></strong>
      </div>
    </form>
  </body>
</html>
