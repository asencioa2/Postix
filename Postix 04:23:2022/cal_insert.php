<?php
include ('con.php');

if(isset($_POST["title"])){
 $query = "INSERT INTO tasks (title, startE, endE) VALUES (:title, :startE, :endE)";
 $statement = $con->prepare($query);
 $statement->execute(
  array(
   ':title'=> $_POST['title'],
   ':startE'=> $_POST['start'],
   ':endE'=> $_POST['end']
  )
 );
}

?>