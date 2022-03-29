<?php

include 'proc_tlogin.php';

?>
<head>
  <link rel="stylesheet" type= "text/css" href="style.css">
  <form action="" method="post" >
      <div class="container">
        <center><h1>Postix Teacher Log In</h1></center>

        <label for="email" class="title"><b>Email</b></label>
        <input type="text" placeholder="Enter Email (Must contain .edu)" name="email" id="email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu|gov)" title="Sorry, only email addresses from .edu and .org domains are allowed.">
    
        <label for="psw" class="title"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw">

    
        <div class="clearfix">
          <a href="index.html"><button type="button" class="cancelbtn">Cancel</button></a>
          <a href="TeacherHomePage.html"></a><button type="submit" class="loginbtn"name="login"id="login">Log In!</button></a>
          <a href="TeacherSignUp.php"><button type="button" class="signupbtn">Sign Up!</button></a>
        </div>
        <br><br><br>
        <div style="color: white; font-size: 30px; text-align:center;" >
          <strong><?php echo $error;?></strong>
        </div>
      </div>
  </form>
</head>