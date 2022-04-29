<?php

include 'proc_tsign.php';

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
    <section>
    <form class = "" action="" method="post">
      <div class = "register-container">
          <div class = "form-content">
              <h1>Postix</h1>
              <p>Where students and teachers connect to making learning fun and easy!!!!.</p>
              </br>
              <a href="teacherLogin.php">Log In!</a>
              <a href="index.html">Back to Home</a>
          </div>
          <div class ="signup-form">
              <h2>Sign Up</h2>
                <span>
                  <label for="name">Name</label>
                  <input
                    type="text"
                    placeholder="Enter Name"
                    name="name"
                    id="name"
                    required
                  />
                </span>

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

                <span>
                  <label for="psw-repeat">Repeat Password</label>
                  <input
                  type="password"
                  name="psw-repeat"
                  id="psw-repeat"
                  placeholder="Repeat Password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  required
                  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                  />
                </span>

                <button type="submit" name ="sign1" id = "sign1">Submit</button>

                <div style="font-size: 30px; text-align: center">
                  <strong><?php echo $error;?></strong>
                </div>
            </div>
        </div>
    </form>
    </section>
  </body>
</html>
