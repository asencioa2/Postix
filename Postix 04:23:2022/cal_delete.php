<?php
include ('con.php');
session_start();
//
if(isset($_GET["id"])){
 $query = "DELETE from tasks WHERE id=:id";
 $statement = $con->prepare($query);
 $statement->execute(
  array(
   ':id'=>$_GET['id'])
 );
}

?>
