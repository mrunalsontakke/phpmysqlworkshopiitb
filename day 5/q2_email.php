<html>
 <form action='q2_email.php' method='POST'>
   <h1>Feedback Form </h1>
   Name :<input type='text' name='name'><br><br>
   Email Id :<input type='text' name='emailid'><br><br>
   Feedback :<textarea name='feedback'></textarea><p>
   <input type='submit' name='submit' value='Send'>
 </form>
</html>

</php

if($_POST['submit'])
{
  ini_set("SMTP","smtp.gmail.com");

  $name=$_POST['name'];
  $useremail=$_POST['emailid'];
  $feedback=$_POST['feedback']
  $subject="Feedback";
  $headers=" From : mrunalsontakke.41@gmail.com ";
  $usermessage="Thankyou for your feedback ! ";
  $adminmail=" mrunalsontakke.41@gmail.com ";
  $header1="From: $usermail ";
  $adminmail=$usermail ;

  // email to user
  mail($useremail,$subject,$usermessage,$headers);

  //mail to admin
  mail($adminmail," Feedback from:$name<br><br>$feedback",$header1);
}
else
{
  echo " there is a error" ;
}

?>




