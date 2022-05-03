<?php
include ('connection.php');
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

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