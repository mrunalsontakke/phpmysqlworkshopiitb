<html>
  <p>
  <form action='register.php' method='POST'>
     <br><h1 style='text-align: center ;'><u>STUDENT REGISTRATION</u></h1><br><hr>
     <h3>Enter Registration Details...</h3>
    <table>
           <tr>
               <td>
                 Your full name :
               </td>
               <td>
                 <input type='text' name='fullname' value='<?php  echo @$fullname; ?>'>
               </td>
           </tr>

            <tr>
               <td>
                Your Roll No  :
               </td>
               <td>
                 <input type='number' name='rollno'>
               </td>
           </tr>

           <tr>
               <td>
                Choose a username :
               </td>
               <td>
                 <input type='text' name='username' value='<?php  echo @$username; ?>'>
               </td>
           </tr>

            <tr>
               <td>
                Email-id :
               </td>
               <td>
                 <input type='text' name='email' value='<?php  echo @$email; ?>'>
               </td>
           </tr>

            <tr>
               <td>
                 Choose a password :
               </td>
               <td>
                 <input type='password' name='password'>
               </td>
           </tr>

           <tr>
               <td>
                 Repeat your password :
               </td>
               <td>
                 <input type='password' name='repeatpassword'>
               </td>
           </tr>
     </table>
     <p>
      <input type='submit' name='submit' value='Register'>
  </form>
</html>

<?php

@$fullname=strip_tags($_POST['fullname']);
@$rollno=strip_tags($_POST['rollno']);
@$username=strip_tags($_POST['username']);
@$email=strip_tags($_POST['email']);
@$password=strip_tags($_POST['password']);
@$repeatpassword=strip_tags($_POST['repeatpassword']);

if(@$_POST['submit'])
{
 //check for existence
 if($fullname&&$rollno&&$username&&$email&&$password&&$repeatpassword)
 {
    if($password==$repeatpassword)
    {
      if(strlen($username) >25 || strlen($fullname) >25)
      {
        echo "Max limit for username/fullname are 25 characters ";
      }
      else
      {
         //check password length
        if (strlen($password) >25 || strlen($password) <6)
         {
           echo "Password must be between 6 and 25 characters";
         }
         else
         {
           //register the user!
             //echo "Sucess! ";
             // encrypt password
             $password=md5($_POST['password']);
             $repeatpassword=md5($_POST['repeatpassword']);
            // echo "Sucess! ";

             //open our db
             include("connectlogin.php") ;
             $getdata="SELECT * FROM `users` WHERE username='$username' ";
             $rowquery=mysqli_query($conn, $getdata);
             $numrows1=mysqli_num_rows($rowquery) ;


             if($numrows1==0)
             {
                 $queryreg="INSERT INTO `users` VALUES('','$fullname','$rollno','$username','$email','$password') ";
                 $input=mysqli_query($conn,$queryreg);

                 die("You have been registered successfully !<a href='index.php'>Return to login page</a>");
             }
             else 
               echo "That username already exists, Please choose a different username";

        }
      }
    }
    else
        echo "Your passwords do no match !";



 }
 else
   {
     echo "Please fill in <b>all</b> fields!<p>";
   }


}

echo "<p><a href='index.php'>Back</a></p>"; 
?>

