<?php
$itemid = $_POST["itemid"];
$itemn = $_POST["itemn"];
$itemq = $_POST["itemq"];

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
$sql = ("INSERT INTO warehouse (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
