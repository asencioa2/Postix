<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Homepage</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix</a></div>
      <div class="links">
        <ul>
          <li><a href="studentHomepage.php">Home</a></li>
          <li><a href="studentHomepage.php">Courses</a></li>
          <li><a href="g_cal.html">Calendar</a></li>
          <li><a href="index.html">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div class="course-container">
      <?php
      include ('connection.php');

      session_start();
      $email = $_SESSION['email'];
      
      echo $email;

      error_reporting(E_ALL);
      ini_set('display_errors', 0);
      
      $sql =  "select * from roster where stu = '$email'";
      $result = mysqli_query($con,$sql);
      echo "<br>";
      echo "<table border='1'>";
      echo "<tr>
              <th>Course ID</th>
              <th>Course Name</th>
              <th>Course Description</th>
              <th>Instructor</th>
              <th>Start Date</th>
              <th>End Date</th>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          foreach ($row as $field => $value) {
              echo "<td>" . $value . "</td>";
          }
          echo "</tr>";
      }
      echo "</table>";
      ?>
    </div>
  </body>
</html>
