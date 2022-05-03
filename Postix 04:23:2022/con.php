<?php

    $host = "localhost";  
    $user = "lovatop1";  
    $password = 'negrito22';  
    $db_name = "postix";  

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) { 
        echo "failed"; 
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
  
?>
