<?php

echo "<html><body>
 <form action=\"login.php\" method=\"post\">
 Username: <input type=\"text\" name=\"uname\">
 <br> Password: <input type=\"text\" name=\"pword\"> <p>
 <input type=\"submit\" name=\"submit\"></form>";

if(isset($_POST['submit']))
{
    echo "Hello, ". $_POST['pword']."!<p>";
}

?>