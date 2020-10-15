<?php
  include("Connectlogin.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:login.php');
		exit;
	}
  $success="";
  $username =$_SESSION['name'];
  $show= "SELECT * FROM `users` WHERE username='$username' ";
  $showresult= mysqli_query($conn,$show);
  $count=mysqli_num_rows($showresult);
  if ($count >0)
  {
      // output data of each row
      while($row = mysqli_fetch_assoc($showresult))
      {
        $php = $row['php'];
        $mysql = $row['mysql'];
        $html = $row['html'];
        $totalobtained = $php + $mysql + $html;
        $percentage = ($totalobtained / 300 )*100;
        $fullname = $row['name'];
      }
      echo $mysql ;
      if($percentage>=60){
        $success="Congratulations you got first class!";
      }
      else
       $success="Better Luck Next Time!";
   }
   //else echo "Error";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>td,h1,h3,div{
    text-align: center;
    }</style>
</head>
<body>
    <h1>Welcome <?php  echo strtoupper($_SESSION['name']) ?></h1>
    <h3>Here's what you scored </h3>
    <table border="2" cellpadding="15"   style="width: 50%; border-collapse: collapse; margin:0 auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>PHP</th>
          <th>MySQL</th>
          <th>HTML</th>
          <th>Total Obtained</th>
          <th>Percentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $fullname; ?></td>
          <td><?php echo $php ; ?></td>
          <td><?php echo $mysql ; ?></td>
          <td><?php echo $html ; ?></td>
          <td><?php echo $totalobtained ; ?></td>
          <td><?php echo $percentage ;  ?> %</td>
        </tr>
      </tbody>
    </table>
    <h1 ><?php echo $success ?></h1>
    <div>
      <form action="sendmail.php" method="POST">
      Enter Parents Email: <input type="email" name="toemail">
      <input type="submit" name="submit">
      </form>
    </div>
    <a style="position:absolute; top:1em ;right:1em;" href="logoutuser.php"><button>Logout</button></a>
</body>
</html>