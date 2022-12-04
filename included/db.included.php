<?php
$servername = "172.16.99.2";
$username = "jbacko";
$password = "student";
$dbname = "warehouse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

require_once 'createaccount.included.php';
// inserts data into student table
$sql = ("INSERT INTO employee (efirstname, elastname, eusername, epassword) VALUES ('$efirstname', '$elastname', '$eusername', '$epassword')");

// scrambles password
$scramblePasswords = password_hash($password, PASSWORD_DEFAULT);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location: ../accountcreated.php");
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
