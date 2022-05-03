<?php
include ('connection.php');
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

if(isset($_POST["id"])){
 $query = "DELETE from tasks WHERE id=:id";
 $statement = $con->prepare($query);
 $statement->execute(
  array(
   ':id'=> $_POST['id'])
 );
}

?>
