<?php
include ('con.php');

$error = null;

if (isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);

    $sql = "select *from teacher where temail = '$email' and tpass = '$PASSWORD'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        #echo "<h1><center> Login successful </center></h1>";
        #echo "<h3><center>Welecome: {$email}</h3>";
        header("Location: teacherHomepage.html");
    }
    else{
        $error = "Invalid Information";
    }  

    

}

$con->close();

?>


