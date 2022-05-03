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
    <section style="background-color: var(--light);">
      <div class = "register-container">
        <div class = "form-content">
          <h1>Postix</h1>
            <p>Learning starts here.</p>
            </br>
            <a href="studentSignUp.php">Sign Up</a>
            <a href="index.html">Back to Home</a>
        </div>
        <div class ="login-form">
          <h2>Log In</h2>
          <form class = "" action="" method="post">
            <span>
              <label for="email">Email</label>
              <input 
              type="text"
              name="email"
              id="email"
              placeholder="Enter email (must contain .edu)"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[edu]{2,}$"
              required
              title="Sorry, only email addresses ending in .edu are allowed."
              />
            </span>

            <span>
              <label for="psw">Password</label>
              <input
              type="password"
              name="psw"
              id="psw"
              placeholder="Enter password"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              required
              title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
              />
            </span>

            <input type="submit" name ="login" id = "login">
            <div style="font-size: 15px; text-align: center">
              <strong><?php echo $error;?></strong>
            </div>
          </form>
        </div>      
    </section>
  </body>
</html>
