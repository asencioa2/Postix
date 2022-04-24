<?php
include ('con.php');
//session_start();
//
if(isset($_POST["id"])){
 $query = "DELETE from tasks WHERE id=:id";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id'=> $_POST['id'])
 );
}

?>
