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
     <a href="createaccount.php">Create Account</a> &nbsp;
  </nav>
<div class="wrapper">

<!-- Login form for our webpage.-->
<section class="createuser-form">
  <h2>Login</h2>
  <p>Please enter your Username and Password.</p>
  <div class="createuser-form-form">
    <form action="included/login.included.php" method="post">

      <input type="text" name="eusername" placeholder="Username..."
      required>
      <br><br>

      <input type="password" name="epassword" placeholder="Password..."
      required>
      <br><br>

      <button type="submit" value="Submit">Login</button>&nbsp; &nbsp;
    </form>
  </div>
  <?php
  // Produces an error message if the email address and username are inncorrect.
  //Produces an error meesage if there is no input or if something went wrong.
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Please fill in all fields.</p>";
    }
    else if ($_GET["error"] == "eusername") {
      echo "<p>Please choose a proper username.</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Error. Something went wrong! Please try again.</p>";
    }
  }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
