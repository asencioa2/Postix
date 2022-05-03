<?php
include ('con.php');
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

if(isset($_POST["id"])){
 $query = "UPDATE tasks SET title=:title, startE=:startE, endE=:endE WHERE id=:id";
 $statement = $con->prepare($query);
 $statement->execute(
  array(
   ':title'=> $_POST['title'],
   ':startE'=> $_POST['start'],
   ':endE'=> $_POST['end'],
   ':id'=> $_POST['id']
  )
 );
}

?>
