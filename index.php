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
     <a href="login.php">Login</a> &nbsp;
     <a href="createaccount.php">Create Account</a> &nbsp;
  </nav>
<div class="wrapper">


<!-- Home screen page prior to loging in or creating an account.-->
<main>
<h1>Welcome to Your Warehouse Storage Repository!</h1>
  <p> Please login or create an account.</p>
</main>

<?php
  include_once 'footer.php';
?>
</html>
