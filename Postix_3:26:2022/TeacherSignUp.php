<?php

include('proc_tsign.php');

?>
<head>
  <link rel="stylesheet" type= "text/css" href="style.css">
  <form action="" method="post">
      <div class="container">
        <center><h1>Postix Teacher Sign Up</h1></center>
    
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name"  id="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email (Must contain .edu)" name="email" id="email" required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu)" title="Sorry, only email addresses from .edu domains are allowed.">
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id ="psw-repeat" required>
    
        <div class="ChoiceButtons">
          <a href="index.html"><button type="button" class="cancelbtn">Cancel</button></a>
          <a href="TeacherLogin.php"><button type="submit" class="signupbtn" name="sign1" id="sign1">Sign Up!</button></a>
        </div>
        <br><br><br>
        <div style="color: white; font-size: 30px; text-align:center;" >
          <strong><?php echo $error;?></strong>
        </div>
      </div>
  </form>
</head>
