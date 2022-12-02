<?php
include_once 'header.php';
?>

<!-- Confirmation of loging out.-->
<main>
  <h1>You have successfully signed out.</h1>
</main>

<?php
// footer code
include_once 'footer.php';
// ends the session
session_unset();
session_destory();
?>
