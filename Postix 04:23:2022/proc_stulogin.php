<?php
include ('con.php');

session_start();

$error = null;

if (isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);

    
    $sql = "select *from students where semail = '$email' and spass = '$PASSWORD'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        
        $sname =  "select suser from students where semail = '$email' and spass = '$PASSWORD'";
        $name = mysqli_query($con,$sname);
        $row = mysqli_fetch_array($name, MYSQLI_ASSOC);
        $names = $row['suser'];
        $_SESSION['semail'] = $names;

        header("Location: TeacherHomepage.html");
    }
    else{
        $error = "Invalid Information";
    }  

    

}

$con->close();

?>


