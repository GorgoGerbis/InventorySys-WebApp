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
     <a href="login.php">Login</a> &nbsp;
  </nav>
<div class="wrapper">


<!-- Create account form.-->
<section class="createuser-form">
  <h2>Create an Account</h2>
  <p>Please enter your Employee information below.</p>
  <div class="createuser-form-form">
    <form action="included/createaccount.included.php" method="post">

      <input type="text" name="efirstname" placeholder="First Name..."
      required>
      <br><br>

      <input type="text" name="elastname" placeholder="Last Name..."
      required>
      <br><br>

      <input type="text" name="eusername" placeholder="Username..."
      required>
      <br><br>

      <input type="password" name="epassword" placeholder="Password..."
      required>
      <br><br>

      <input type="password" name="epasswordrepeat" placeholder="Re-Enter Password..."
      required>
      <br><br>

      <button type="submit" name="submit">Submit</button>&nbsp; &nbsp;
      <button type="reset" name="reset">Reset Form</button>
    </form>
  </div>
  <?php
  //validates user input.
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Please fill in all fields.</p>";
    }
    else if ($_GET["error"] == "eusername") {
      echo "<p>Please choose a proper username.</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Passwords do not match. Please re-enter password.</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Error. Something went wrong! Please try again.</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>Congratulations! You have succesfully signed up!</p>";
    }
  }
  ?>
</section>

  <?php
  //footer code
    include_once 'footer.php';
  ?>
