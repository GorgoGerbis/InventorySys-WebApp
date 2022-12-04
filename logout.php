<?php
  session_start();
?>

<!-- Header for most of the pages-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Warehouse Repository</title>
<link href="reg.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <h1>Warehouse Storage Repository</h1>
  </header>
  <nav>
     <a href="index.php">Home</a> &nbsp;
  </nav>
<div class="wrapper">


<!-- Confirmation of loging out.-->
<main>
  <h1>You have successfully signed out.</h1>
</main>

<?php
// footer code
include_once 'footer.php';
// ends the session
session_unset();
session_destory();
?>
