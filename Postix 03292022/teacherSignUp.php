<?php

include 'proc_tlogin.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Sign-Up</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix Teacher Sign-Up</a></div>
    </div>
    <form action="" method="post">
      <label for="name">Name</label>
      <input
        type="text"
        placeholder="Enter Name"
        name="name"
        id="name"
        required
      />

      <label for="email">Email</label>
      <input
        type="text"
        placeholder="Enter Email (Must contain .edu)"
        name="email"
        id="email"
        required
        pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu)"
        title="Sorry, only email addresses from .edu domains are allowed."
      />

      <label for="psw">Password</label>
      <input
        type="password"
        name="psw"
        id="psw"
        placeholder="Enter Password"
        pattern=".{8,20}"
        required
        title="Password should be 8 to 20 characters long."
      />

      <label for="psw-repeat">Repeat Password</label>
      <input
        type="password"
        name="psw-repeat"
        id="psw-repeat"
        placeholder="Repeat Password"
        pattern=".{8,20}"
        required
        title="Password should be 8 to 20 characters long."
      />

      <a href="index.html">Back to Home</a>
      <button type="submit" name="sign1" id="sign1">Sign Up!</button>

      <div style="color: white; font-size: 30px; text-align: center">
        <strong><?php echo $error;?></strong>
      </div>
    </form>
  </body>
</html>
