<?php
require 'connection.php';

session_start();
echo $_SESSION["cbuser"][0];
echo $_SESSION["cbuser"][1];

$isbn = $_POST["isbn"];
$basketID = $_SESSION["cbuser"][1]

echo $isbn. " ". $basketID;


/*$sql = "";

$result = $conn->query($sql);

if($result->num_rows>0) {
  while($row = $result->fetch_assoc()) {

  }
}*/

?>