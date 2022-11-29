<?php
$itemid = $_POST["itemid"];

$servername = "172.16.99.2";
$username = "student";
$password = "password";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// inserts data into warehouse table
$sql = ("DELETE FROM warehouse WHERE itemid= VALUES ('$itemid')");

if ($conn->query($sql) === TRUE) {
  echo "Record successfully Deleted";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
