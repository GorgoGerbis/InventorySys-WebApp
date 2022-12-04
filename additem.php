<?php
  include_once 'header.php';
?>

<!-- Login form for our webpage.-->
<section class="additem-form">
  <h2>Add Product</h2>
  <div class="additem-form-form">
    <form action="included/additem.included.php" method="post">

      <label for="itemid">Product ID</label<br><br>
      <input type="text" name="itemid" placeholder="Item ID..."
      required>
      <br><br>

      <label for="itemn">Product Name</label<br><br>
      <input type="text" name="itemn" placeholder="Item Name..."
      required>
      <br><br>

      <label for="itemq">Product Quantity</label<br><br>
      <input type="text" name="itemq" placeholder="Item Quantity..."
      required>
      <br><br>

      <button type="submit" value="Submit">Add Product</button>&nbsp; &nbsp;
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
    else if ($_GET["error"] == "itemn") {
      echo "<p>Please enter an Item Name.</p>";
    }
    else if ($_GET["error"] == "itemq") {
      echo "<p>Please enter an Item Quantity.</p>";
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
