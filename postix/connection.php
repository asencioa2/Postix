<?php

    $host = "localhost";  
    $user = "postix_admin";  
    $password = 'Postix0809';  
    $db_name = "postix";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        echo "Failed to connect with MySQL: " . mysqli_connect_error();
        exit();  
    }
  
?>