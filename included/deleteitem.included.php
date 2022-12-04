<?php
$servername = "172.16.99.2";
$username = "jbacko";
$password = "student";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$itemid = $_POST["itemid"];

$sql = ("DELETE FROM inventory WHERE itemid = ('$itemid')");
//Removes item from database
if ($conn->query($sql) === TRUE)
    {
    header("location: ../itemdeleted.php");
    }
else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();

?>
