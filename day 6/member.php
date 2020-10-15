<?php
  session_start();

  if(@$_SESSION['username']) {
   echo "Welcome " .@$_SESSION['username']." !<br><br>
   <b><u>Click the link below to get results: </u></b><p>
   <a href='result.php'>RESULT</a><br><br> ";

   echo  "<br><a href='logoutuser.php'>Logout</a><br><a href='changepassword.php'>Change password </a> ";
  }
  else 
    die("You must be logged in !");

?>