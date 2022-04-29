<?php
include ('connection.php');

$error = null;

if (isset($_POST['submit']))
{
    $cname = mysqli_real_escape_string($con,$_POST['cname']);
    $cinumber = mysqli_real_escape_string($con,$_POST['CInumber']);
    $start = mysqli_real_escape_string($con,$_POST['start']);
    $end = mysqli_real_escape_string($con,$_POST['end']);
    $cdes = mysqli_real_escape_string($con,$_POST['cdes']);

    if ($start < $end) {
        $sql = "INSERT INTO course (id,cname,cdes,temail,stdate,edate) VALUES ('$cinumber','$cname','$cdes','TESTTEACHER','$start','$end')";

        if (mysqli_query($con, $sql)){
                
            header("Location: teacherHomepage.html");
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
            $error = "Error: Please return to course creation page";
        }
    }
    
    else
        $error = "The end date cannot come before the start date. Please try again.";

}

?>