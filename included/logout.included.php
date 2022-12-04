<?php
session_start();
session_unset();
session_destory();
header("location: ../logout.php");
exit();
?>
