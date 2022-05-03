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
      <div class="logo"><a href="#">Postix Student Sign Up</a></div>
    </div>
    <section style="background-color: var(--light);">
      <form class = "" action="" method="post">
        <div class = "register-container">
          <div class = "form-content">
              <h1>Postix</h1>
              <p>Learning starts here.</p>
              </br>
              <a href="studentLogin.php">Log In</a>
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
                pattern="(?=.*\d)[a-z0-9._%+-]+@[a-z0-9.-]+\.[edu]{2,}$"
                required
                title="Student emails must contain at least one number and must end in .edu."
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
              <div style="font-size: 15px; text-align: center">
                <strong><?php echo $error;?></strong>
              </div>
          </div>
        </div>
      </form>
    </section>
  </body>
</html>
