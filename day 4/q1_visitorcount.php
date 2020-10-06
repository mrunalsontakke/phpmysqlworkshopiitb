<form action ='q1_visitorcount.php' method='POST'>
    Name of the student :<input type='text' name='name'><p>
    <h4>Marks in each subject (Out of 100) :</h4>
    Subject 1 :<input type='number' name='Subject1'><p>
    Subject 2 :<input type='number' name='Subject2'><p>
    Subject 3 :<input type='number' name='Subject3'><p>
    Subject 4 :<input type='number' name='Subject4'><p>
    Subject 5 :<input type='number' name='Subject5'><p>
    <input type='submit' name='submit' value='submit'>
    <input type='reset'  name='Reset'  value='Reset'><br>
  </form>
<?php

require ("connected.php");

  @$name=$_POST['name'];
  @$a=$_POST['Subject1'];
  @$b=$_POST['Subject2'];
  @$c=$_POST['Subject3'];
  @$d=$_POST['Subject4'];
  @$e=$_POST['Subject5'];
  @$total=$a+$b+$c+$d+$e ;
  $tot=500;
  $percent=(float)$total/5 ;

if($percent<=100)
{
  if($name&&$a&&$b&&$c&&$d&&$e)
  {
   echo  "
   Student name :$name<br>
   Marks in each subject:<br>
   Subject 1:$a<br>
   Subject 2:$b<br>
   Subject 3:$c<br>
   Subject 4:$d<br>
   Subject 5:$e<br>
   Total Obtained :$total<br>
   Total Marks :$tot<br>
   Percentage :$percent<br>";

  $write =" INSERT INTO `class 1`(`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `totalobtained`, `totalmarks`, `percent`) VALUES (' ','$name','$a','$b','$c','$d','$e','$total','$tot','$percent')";

  if (mysqli_query($conn, $write))
  {
    echo "New record created successfully";
  }
  else
  {
    echo "Error: " . $write . "<br>" . mysqli_error($conn);
  }
 }
}
else
{
  echo "Please enter marks between 0-100";
}

$file=file_get_contents("count.txt");
$visitors=$file ;

$visitorsnew= $visitors + 1;
$filenew=fopen("count.txt","w");
fwrite($filenew,$visitorsnew);

echo "<br>You've had $visitorsnew vistors.";

$mark=" INSERT INTO `visitors`(`visits`) VALUES ('$visitorsnew') ";
  if (mysqli_query($conn, $mark))
  {
    echo "Done";
  }
  else
  {
    echo "Error: ".$mark."<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

?>