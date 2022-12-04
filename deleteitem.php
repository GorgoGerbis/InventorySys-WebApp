<?php
  include_once 'header.php';
?>

<!-- Login form for our webpage.-->
<section class="additem-form">
  <h2>Remove Product</h2>
  <div class="additem-form-form">
    <form action="included/deleteitem.included.php" method="post">

      <label for="itemid">Product ID</label<br><br>
      <input type="text" name="itemid" placeholder="Item ID..."
      required>
      <br><br>

      <button type="submit" value="Submit">Remove Product</button>&nbsp; &nbsp;
      <button type="reset" name="reset">Reset Form</button>

    </form>
  </div>
  <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Please fill in all fields.</p>";
    }
    else if ($_GET["error"] == "itemid") {
      echo "<p>Please enter an Item ID number.</p>";
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
