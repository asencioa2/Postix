<?php
include ('con.php');
session_start();

$data = array();

$query = "SELECT * FROM tasks ORDER BY id";
$statement = $con->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row){
 $data[] = array(
  'id'=> $row["id"],
  'title'=> $row["title"],
  'start'=> $row["startE"],
  'end'=> $row["endE"]
 );
}

echo json_encode($data);

?>