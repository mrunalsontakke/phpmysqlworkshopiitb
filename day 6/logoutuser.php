<?php
 session_start();
 session_destroy();

 echo "You've been logged out . <br><a href='index.php' >Click here</a> to go back to login page.";

?>