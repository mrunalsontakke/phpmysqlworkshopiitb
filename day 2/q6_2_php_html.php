

<html>
   <form action='q6_2_php_html.php' method='POST'>
     <?php echo "Name of the student :<br>  " ; ?><input type='text' name='name' ><br>
     <h4><?php echo "Marks in Each Subject Out of 100 :<br> " ; ?></h4>
      <?php echo "Subject 1 :<br> " ; ?><input type='number' name='Subject1' ><br>
      <?php echo "Subject 2 :<br> " ; ?><input type='number' name='Subject2' ><br>
      <?php echo "Subject 3 :<br> " ; ?><input type='number' name='Subject3' ><br>
      <?php echo "Subject 4 :<br> " ; ?><input type='number' name='Subject4' ><br>
      <?php echo "Subject 5 :<br> " ; ?><input type='number' name='Subject5' ><br>
      <input type='submit' value='Enter'>


   </form>
   </html>
<?php
@$name= $_POST['name'];
@$sub1=$_POST['Subject1'];
@$sub2=$_POST['Subject2'];
@$sub3=$_POST['Subject3'];
@$sub4=$_POST['Subject4'];
@$sub5=$_POST['Subject5'];

@$total=$sub1+$sub2+$sub3+$sub4+$sub5 ;
if($sub1<0||$sub1>100||$sub2<0||$sub2>100||$sub3<0||$sub3>100||$sub4<0||$sub4>100||$sub5<0||$sub5>100)
{
    echo "Please enter valid input ";
}
else 
{
  if($total && $name)
   {
    echo "NAME OF THE STUDENT : $name <br>" ;
    echo "TOTAL MARKS OBTAINED : $total <br>" ;
    $marks=500;
    echo "TOTAL MARKS : $marks <br>";
    $percentage=($total/500)*100 ;
    echo "PERCENTAGE : $percentage % " ;
   }
}
?>