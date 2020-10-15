<?php

session_start();

$username=$_POST['username'];
$password=md5(strip_tags($_POST['password']));

if(@$_POST['submit'])
{
   if($username && $password)
   {
        require ("connectlogin.php");

        $extract="SELECT * FROM `users` WHERE username='$username' ";
        $result=mysqli_query($conn, $extract);
        $numrows=mysqli_num_rows($result) ;

        if($numrows!==0)
        {
           while($row=mysqli_fetch_assoc($result))
           {
             $dbusername=$row['username'];
             $dbpassword=$row['password'];
           }
           if($dbusername==$username && $dbpassword==$password)
            {
             $_SESSION['username']=$username ;

             echo "You are logged in !<br><a href='member.php'>Click</a> here to view your marksheet .<br>"  ;
            }

           else
             echo "Incorrect username or password !<br><p><a href='index.php'>Back</a>";
        }
        else
          die("That user doesn't exist ! ");

   }
   else
        echo " Please enter username and a password !<p><a href='index.php'>Back</a>" ;

}
?>