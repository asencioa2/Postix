<?php

include('proc_stusign.php');

?>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <form action="" method="post">
      <div class="container">
        <center><h1>Postix Student Sign Up</h1></center>
    
        <label for="name" class="title"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <label for="email" class="title"><b>Email</b></label>
        <input type="text" placeholder="Enter Email (Must contain .edu)" name="email" id="email" required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu)" title="Sorry, only email addresses from .edu domains are allowed.">
    
        <label for="psw" class="title"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
        <label for="psw-repeat" class="title"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    
        <div class="clearfix">
          <a href="index.html"><button type="button" class="cancelbtn">Cancel</button></a>
          <a href="StudentLogin.php"><button type="submit" class="signupbtn" name="sign2" id="sign2">Sign Up!</button></a>
          
        </div>
        <br><br><br>
        <div style="color: white; font-size: 30px; text-align:center;" >
          <strong><?php echo $error;?></strong>
        </div>
      </div>
  </form>
</head>
