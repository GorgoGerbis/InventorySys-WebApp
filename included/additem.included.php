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
$itemn = $_POST["itemn"];
$itemq = $_POST["itemq"];

$sql = ("INSERT INTO inventory (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");
//insert to php database
if ($conn->query($sql) === TRUE)
    {
    header("location: ../itemcreated.php");
    }
else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();

?>
