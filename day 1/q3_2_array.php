<?php

$A=array(array(4,5),array(6,7));
$B=array(array(16,10),array(4,7));

echo " Addition of matrix is : <br>";

for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
      echo $A[$i][$j] +$B[$i][$j]." " ;
    }
    echo "<br>";
}



?>