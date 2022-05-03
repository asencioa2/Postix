<?php
include ('connection.php');
// Creates session 
session_start();

// This is used to fill the dropdown menu with all possible emails that can be entered
$create_list = "SELECT semail FROM students";

$list = mysqli_query($con, $create_list);
$lcount = mysqli_num_rows($list);

$error = null;

$msg = null;

error_reporting(E_ALL);
ini_set('display_errors', 0);

$teach = $_SESSION['email'];

// This code will check if the submit button has been clicked and will execute the code
if (isset($_POST['submit'])){
  
  $add = mysqli_real_escape_string($con,$_POST['add']);
  $course = mysqli_real_escape_string($con,$_POST['crs']);
  $test = "SELECT suser FROM students where semail='$add'";

  $tresult = mysqli_query($con,$test);
  $tcount = mysqli_num_rows($tresult);

  $row = mysqli_fetch_array($tresult);
  $name = $row['suser'];

  $check ="SELECT stu FROM roster where stu='$add'";

  if($tcount==1){

    $sql = "INSERT INTO roster (stu,name,teacher,cname) VALUES ('$add','$name','$teach','$course')";
    $result = mysqli_query($con,$sql);
    $msg = "Student " .$name. " has been added to the class roster";
    
  }
  elseif(mysqli_query($con,$check)){
    $error = "Error: This email " .$add. " is not a valid student account";

  }

}
// Will check if the delete button has been clicked and then execute the below code
if(isset($_POST['delete'])){

  $delete = mysqli_real_escape_string($con,$_POST['add']);
  $course = mysqli_real_escape_string($con,$_POST['crs']);
  $test = "SELECT suser FROM students where semail='$delete' AND cname='$course'";

  $tresult = mysqli_query($con,$test);
  $tcount = mysqli_num_rows($tresult);

  $row = mysqli_fetch_array($tresult);
  $name = $row['suser'];

  $check ="SELECT stu FROM roster where stu='$delete'";

  if($tcount==1){
    $result = "DELETE FROM roster WHERE stu='$delete' and teacher='$teach'";
    mysqli_query($con,$result);
    $msg = "Student ".$name. " has been deleted from the class roster";

  }elseif(mysqli_query($con,$check)){
    $error = "Error: This email " .$delete. " is not a valid account. Please check course and email and try again.";

  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Roster Page</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="navbar-container">
      <div class="logo"><a href="#">Postix</a></div>
      <div class="links">
        <ul>
          <li><a href="teacherHomepage.php">Home</a></li>
          <li><a href="courseCreation.php">Create a Course</a></li>
          <li><a href="roster.php">Roster</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <h1>Roster</h1>
      <form method="post">
      
      <label for="crs">Please select a course</label><br>
      <input type="text" name="crs" id="crs" autocomplete="on" list="course-list">
      <datalist id="course-list">
        
        <?php
        
        

        $sqll = "SELECT * FROM course WHERE temail='$teach'";
        $resultt = mysqli_query($con, $sqll);

        while ($roww = mysqli_fetch_assoc($resultt)) { ?>
          <option value="<?php echo $roww['cname']; ?>">
          <?php echo $roww['cname']; ?></option>

        <?php
        }
        ?>

      </datalist>
      </input>

      <label for="students">Please enter a student email</label>
      <br>
      <input type="text" autocomplete="on" list="students" id="add" name="add" required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9]\.)+(edu)" title="Sorry, only email addresses from .edu domains are allowed.">      
      <datalist id="students">
      
        <?php 
        
        while($row = mysqli_fetch_array($list)) { ?>
            <option value="<?php echo $row['semail']; ?>">
            <?php echo $row['semail']; ?></option>
        <?php
        }
        ?>

      </datalist>
        <div class="bubuttons">
          <input type="submit" value="Delete Student" name="delete" id="delete" style="background-color: red">
          <input type="submit" value="Add Student" name="submit" id="submit">
        </div>
      </form>
      <div style="font-size: 20px;">
        <strong><?php echo $msg;?></strong>
        <strong><?php echo $error;?></strong>
    </div>
    <br><br>
    <?php

      $sql = "SELECT * FROM roster WHERE teacher='$teach'";
      $result = mysqli_query($con, $sql);

      echo "<table border='1'>
      <tr>
      <th>Student Name</th>
      <th>Student Email</th>
      <th>Course</th>
      </tr>";

      while ($row = mysqli_fetch_array($result))
      {
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['stu'] . "</td>";
          echo "<td>" . $row['cname'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";

    ?>
    </div>
    <br>
  </body>
</html>

