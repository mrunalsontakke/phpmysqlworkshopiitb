<?php
  session_start();
  $user=$_SESSION['username'] ;

  if($user)
  {
    // user is logged in
      if(@$_POST['submit'])
      {   //check fields
        $oldpassword=md5($_POST['oldpassword']);
        $newpassword=md5($_POST['newpassword']);
        $repeatnewpassword=md5($_POST['repeatnewpassword']);

          //check pass against db
          //conect
        include('connectlogin.php');
        $query="SELECT password FROM `users` WHERE username='$user' ";
        $queryget=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($queryget);

        $oldpassworddb= $row['password'] ;

         if($oldpassworddb==$oldpassword )
         {
            if( $repeatnewpassword==$newpassword )
             {
               //change pass in db
               $update="UPDATE `users` SET password='$newpassword' WHERE username='$user'";
               $updated=mysqli_query($conn,$update);
               session_destroy();
               die("Your password has been changed .<br><a href='index.php'>RETURN  </a>to the login page ");
             }
            else
               die("New passwords don't match !");
          }
         else
           die("Old password doesn't match !");

      }
      else
       {
         echo" <h1>Change password</h1><hr>
            <form action='changepassword.php' method='POST'>
             Old password :<input type='text' name='oldpassword'><p>
             New password :<input type='password' name='newpassword'><p>
             Repeat new password :<input type='password' name='repeatnewpassword'><p>
             <input type ='submit' name='submit' value='Change password'>
             </form> ";
       }

  echo "<p><a href='member.php'>click here</a> to go back.";

  }
  else
    echo "You must be logged in to change the password. ";


?>




