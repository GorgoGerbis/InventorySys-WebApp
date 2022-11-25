// Dealing with Forms: https://www.php.net/manual/en/tutorial.forms.php
// PHP Connect to MySQL: https://www.w3schools.com/php/php_mysql_connect.asp
// PHP MySQL Select Data: https://www.w3schools.com/php/php_mysql_select.asp

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'InventorySystem';

$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
  
if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
  exit();
}

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;

$mysqli->close();
?>