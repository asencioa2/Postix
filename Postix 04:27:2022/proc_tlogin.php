<?php

session_start();
include ('con.php');

$error = null;

if (isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);

    

    $sql = "select *from teacher where temail = '$email' and tpass = '$PASSWORD'";
    $result = mysqli_query($con, $sql);
    
    $count = mysqli_num_rows($result);

    if($count == 1){

        $tname =  "select tuser from teacher where temail = '$email' and tpass = '$PASSWORD'";
        $name = mysqli_query($con,$tname);
        $row = mysqli_fetch_array($name, MYSQLI_ASSOC);
        $names = $row['tuser'];
        $_SESSION['email'] = $names;

        header("Location: teacherHomepage.html");
    }
    else{
        $error = "Invalid Information";
    }  

    

}

$con->close();

?>


