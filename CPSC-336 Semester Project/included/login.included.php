<?php

if (isset($_POST["submit"])) {

  $eusername = $_POST["eusername"];
  $password = $_POST["epassword"];

  require_once 'db.included.php';
  require_once 'reg_functions.included.php';

  if (emptyInputLogin($eusername, $epassword) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }
// logs user in
  loginUser($conn, $eusername, $epassword);
}
else {
  header("location: ../Profile.php");
  exit();

}
 ?>
