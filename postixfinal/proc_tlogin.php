<?php

session_start();
include ('connection.php');

$error = null;

if (isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);

    

    $sql = "select * from teacher where temail = '$email' and tpass = '$PASSWORD'";
    $result = mysqli_query($con, $sql);
    
    $count = mysqli_num_rows($result);

    if($count == 1){

        $tname =  "select temail from teacher where temail = '$email' and tpass = '$PASSWORD'";
        $name = mysqli_query($con,$tname);
        $row = mysqli_fetch_array($name, MYSQLI_ASSOC);
        $names = $row['temail'];
        $_SESSION['email'] = $names;

        header("Location: teacherHomepage.php");
    }
    else{
        $error = "Invalid Information";
    }  

    

}

$con->close();

?>


