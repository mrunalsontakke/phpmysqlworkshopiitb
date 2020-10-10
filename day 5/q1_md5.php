<html>
 <form action='q1_md5.php' method='POST'>
    <h4>Enter Login Details : </h4>
     Username :<input type='text' name='username'><br>
     Password : <input type='password' name='password'><br>
    <input type='submit' name='login' value='login'>
 </form>
</html>

<?php

require("connectdata1.php");

@$username=$_POST['username'];
@$password=$_POST['password'];

if($_post['login'])
{
   if($username && $password)
   {
    $password_enc =md5($password) ;
    $insert="INSERT INTO `userlogin` VALUES('$username','$password_enc')";
      if (mysqli_query($conn,$insert))
      {
       echo "Registered successfully";
      }
      else
      {
       echo "Error: " .$insert . "<br>" . mysqli_error($conn);
      }
   }
  else
  {
    echo "Please enter the username and password.";
  }
}
mysqli_close($conn);
?>
