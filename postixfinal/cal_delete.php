<?php
include ('connection.php');
session_start();
//
if(isset($_POST["id"])){
 $query = "DELETE from tasks WHERE id=:id";
 $statement = $con->prepare($query);
 $statement->execute(
  array(
   ':id'=> $_POST['id'])
 );
}

?>
