<?php
 echo " Enter the 3 sides of triangle:" ;
?>

<html>
   <form action='q6_1_php_html.php' method='GET'>
     <input type='number' name='side1' ><br>
     <input type='number' name='side2' ><br>
     <input type='number' name='side3' ><br>
     <input type='submit' value='Enter'>

   </form>
</html>

<?php

@$a= $_GET['side1'];
@$b= $_GET['side2'];
@$c= $_GET['side3'];

 if($a==$b&&$b==$c)
  {
      echo "Equilateral triangle.<br>" ;
  }
 else
  {
     if( pow($a,2)==pow($b,2)+pow($c,2)|| pow($b,2)==pow($a,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2))
       echo " Right angled triangle";
     else if($a==$b || $b==$c||$c==$a)
       echo "Isoceles triangle";
     else
       echo "Scalene triangle";
  }

?>

