<?php
function emptyInputCreate($efirstname, $elastname, $eusername, $epassword, $epasswordrepeat) {
  $result;
  if (empty($efirstname) || empty($elastname) || empty($eusername) || empty($epassword) || empty($epasswordrepeat)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//checks for valid password
function passCheck($epassword, $epasswordrepeat) {
  $result;
  if ($epassword !== $epasswordrepeat) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//checks to see if username is already in system
function eusernametaken($conn, $eusername) {
  $sql = "SELECT * FROM employee WHERE eusername = ?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_init($stmt, $sql)) {
    header("location: ../createaccount.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $eusername);
  mysqli_stmt_execute($stmt);

  $resultinfo = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultinfo)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

//creates student account
function createeAccount($conn, $efirstname, $elastname, $eusername, $epassword) {
  $sql = ("INSERT INTO employee (efirstname, elastname, eusername, epassword) VALUES ('$efirstname', '$elastname', '$eusername', '$epassword')");
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_init($stmt, $sql)) {
    header("location: ../createaccount.php?error=stmtfailed");
    exit();
  }

// hashes password
  $scramblePasswords = password_hash($epassword, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssssss", $efirstname, $elastname, $eusername, $scramblePasswords);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../createaccount.php?error=none")
  exit();
}

//checks if login input is empty
function emptyInputLogin($eusername, $epassword) {
  $result;
  if (empty($eusername) || empty($epassword)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//function to login user
function loginUser($conn, $eusername, $epassword) {
  $eusernametaken = eusernametaken($conn, $eusername, $epassword);

  if($eusernametaken === false) {
    header("location: ../login.php?error=incorrectlogin")
    exit();
  }

//verifies password
  $passwordHashed = $eusernametaken["epassword"]
  $checkpassword = password_verify($pwd, $pwdHashed);

  if($checkpassword === false){
    header("location: ../login.php?error=incorrectlogin")
    exit();
  }
  else if ($checkpassword === true) {
    session_start();
    $_SESSION["eusername"] = $eusernametaken["eusername"];
    header("location: ../profile.php");
    exit();
  }
}

?>
