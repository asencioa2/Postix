<?php

include('proc_stusign.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Sign-Up</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix</a></div>
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
        placeholder="Enter Password"
        name="psw"
        id="psw"
        required
      />

      <label for="psw-repeat">Repeat Password</label>
      <input
        type="password"
        placeholder="Repeat Password"
        name="psw-repeat"
        id="psw-repeat"
        required
      />

      <a href="index.html">Back to Home</a>
      <button type="submit" name="sign1" id="sign1">Sign Up!</button>

    <br><br><br>
    <div style="font-size: 30px; text-align: center">
        <strong><?php echo $error;?></strong>
      </div>

    </form>

  </body>
</html>
