<?php
include ('connection.php');
session_start();

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
