<?php

if (isset($_POST["submit"])) {

  $efirstname = $_POST["efirstname"];
  $elastname = $_POST["elastname"];
  $eusername = $_POST["eusername"];
  $epassword = $_POST["epassword"];
  $epasswordrepeat = $_POST["epasswordrepeat"];


  require_once 'db.included.php';

  require_once 'reg_functions.included.php';

  if (emptyInputCreate($efirstname, $elastname, $eusername, $epassword, $epasswordrepeat) !== false) {
    header("location: ../createaccount.php?error=emptyinput");
    exit();
  }

  if (passCheck($epassword, $epasswordrepeat) !== false) {
    header("location: ../createaccount.php?error=invalidpwmatch");
    exit();
  }

  if (eusernameTaken($conn, $eusername) !== false) {
    header("location: ../createaccount.php?error=employeeuserexists");
    exit();
  }
// function to create the student account.
  createeAccount($efirstname, $elastname, $eusername, $epassword, $epasswordrepeat);

  }
  else {
    header("location: ../createaccount.php");
    exit();
}
 ?>
