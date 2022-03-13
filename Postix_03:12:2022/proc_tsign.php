<?php
include ('con.php');

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$PASSWORD = mysqli_real_escape_string($con,$_POST['psw']);
$COPY = mysqli_real_escape_string($con,$_POST['psw-repeat']);

if (isset($_POST['sign1']) && $PASSWORD==$COPY)
{
    $sql = "INSERT INTO teacher (temail,tuser,tpass) VALUES ('$email','$name','$PASSWORD')";

    if (mysqli_query($con, $sql))
    {
        echo "<h1><center> New login was created! </center></h1>";
        header("Location: TeacherLogin.html");

    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        echo "<h1><center> Error: passwords did not match! </center></h1>";
    }

}
else{
    echo "<h1><center> Error: passwords do not match! </center></h1>";
}

$con->close();

?>


