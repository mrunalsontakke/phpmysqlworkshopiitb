//username and  password for admin login is  username='admin' and password='admin'

<?php

session_start();

@$adminuser=$_POST['adminusername'] ;
@$adminpass=$_POST['adminpassword'] ;
@
$passadmin_enc=md5($adminpass);

if(@$_POST['submit'])
{
  if($adminuser&&$adminpass)
  {
    include('connectlogin.php');
    $admindata="SELECT * FROM `users` WHERE username='admin' ";
    $admindataquery=mysqli_query($conn,$admindata);

    if($admindataquery)
    {
        while($row =mysqli_fetch_assoc($admindataquery))
        {
          $dbusername=$row['username'];
          $dbpassword=$row['password'];
        }

          if($dbpassword==$adminpass &&  $dbusername==$adminuser)
          {
            $_session['name']='admin';

            echo "Welcome , ADMIN !<br><p><h2><a href= 'config.php'>Change/Add Student Record </a></h2>";
            echo "<p><a href='logoutadmin.php'><b>Click here<b></a> to logout. ";
          }
          else
             echo "Incorrect password or username ";
     }
    else
      die("ERROR ") ;

  }
  else
    echo "Please fill all fields!";

}
?>


