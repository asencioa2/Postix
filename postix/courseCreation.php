<?php

include('proc_courseCreation.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Homepage</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix</a></div>
      <div class="links">
        <ul>
          <li><a href="teacherHomepage.html">Home</a></li>
          <li><a href="courseCreation.php">Create a Course</a></li>
          <li><a href="roster.php">Roster</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <form action="" method="post">
      <div class="container">
        <div class="row">
          <div class="col-25">
            <label for="fname">Course Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="cname" name="cname" placeholder="Course Name" required pattern="(?=.*[a-zA-Z].*)[0-9A-Za-z_ ]+" title="Course Name should contain letters with no special characters (except underscores).">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Course Identification Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="CInumber" name="CInumber" placeholder="Enter Identification Number" maxlength="8" required pattern="^[0-9]{8}$" title="Course ID should be 8-digits; cannot contain letters.">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Duration">Duration</label>
          </div>
          <label>Start Date:</label>
            <input type="date" id="start" name="start" required></br>
          <label >End Date:</label>
            <input type="date" id="end" name="end" required>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Course Description</label>
          </div>
          <div class="col-75">
            <textarea id="cdes" name="cdes" placeholder="Explain Your Course" required style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit" name="submit" id="submit">
        </div>
      </div>
      <div style="font-size: 30px; text-align: center">
        <strong><?php echo $error;?></strong>
      </div>
    </form> 
  </body>
</html>
