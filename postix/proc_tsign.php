<?php
include ('connection.php');

$error = null;


if (isset($_POST['sign1']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);
    $COPY = mysqli_real_escape_string($con,$_POST['psw-repeat']);

    if (strlen($PASSWORD) >= 8){

        if($PASSWORD==$COPY){

            $sql = "INSERT INTO teacher (temail,tuser,tpass) VALUES ('$email','$name','$PASSWORD')";

            if (mysqli_query($con, $sql))
            {
                header("Location: teacherLogin.php");
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                $error = "Error: Please return to sign up page";
            }

        }
        else{
            $error = "Passwords are not matching!";
        }

    }
    else{
        $error = "Passsword length has to be at least 8 characters!";
    }



}

$con->close();

?>


