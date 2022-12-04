<?php
  session_start();
?>

<!-- User's Warehouse page after login.-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Warehouse Repository</title>
<link href="reg.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <h2>Warehouse Profile Repository Navigation</h2>
  </header>

<div class="wrapper">
<main>
  <p>Please select one of the following options below.</p>
  <nav>
     <a href="profile.php">Home Profile</a> &nbsp;
     <a href="additem.php">Add Product</a> &nbsp;
     <a href="deleteitem.php">Remove Product</a> &nbsp;
     <a href="listitems.php">List Products</a> &nbsp;
     <a href="logout.php">Logout</a>&nbsp;
  </nav>
</main>
</html>

<?php
//footer code
  include_once 'footer.php';
?>
