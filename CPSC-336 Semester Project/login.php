<?php
  include_once 'header.php';
?>

<!-- Login form for our webpage.-->
<section class="createuser-form">
  <h2>Login</h2>
  <p>Please enter your Username and Password.</p>
  <div class="createuser-form-form">
    <form action="Included/login.included.php" method="post">

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
