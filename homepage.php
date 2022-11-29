<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  h2 {
    text-align: center;
  }
  .float-container {
    text-align: justify;
    border: 3px solid #FFF;
    padding: 20px;
    text-align: center;
  }

  .float-child {
    width: auto;
    float: left;
    padding: 20px;
    border: 3px solid Black;
  }
</style>
</head>
<body>

<h2>Add Products, Delete Products, and List Products</h2>
<div class="float-container">
    <div class="float-child">
      <form action="additem.php" method="post">

        <label for="itemid">Item ID</label<br><br>
        <input type="text" id="itemid" name="itemid" placeholder="Item ID..."
        required>
        <br><br>

        <label for="itemn">Item Name</label<br><br>
        <input type="text" id="itemin" name="itemin" placeholder="Item Name..."
        required>
        <br><br>

        <label for="itemq">Item Quantity</label<br><br>
        <input type="text" id="itemq" name="itemq" placeholder="Item Quantity..."
        required>
        <br><br>
        <?php
        if (isset($_POST["submit"])) {
          require_once 'additem.php';
        }
        ?>
        <button type="submit" value="submit">Add Item</button>&nbsp; &nbsp;
      </form>
    </div>
    <div class="float-child">
      <form action="deleteitem.php" method="post">

        <label for="itemid">Item ID</label<br><br>
        <input type="text" name="itemid" placeholder="Item ID..."
        required>
        <br><br>
        <?php
        if (isset($_POST["submit"])) {
          require_once 'deleteitem.php';
        }
        ?>
        <button type="submit" value="Submit">Delete Item</button>

      </form>
    </div>

    <div class="float-child">
      <form action="Included/login.included.php" method="post">

        <input type="text" name="Susername" placeholder="Username..."
        required>
      </form>
    </div>
  </div>
</body>
</html>
