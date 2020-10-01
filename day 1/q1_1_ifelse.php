<?php

$number =array(11,23,72,44);
for($i=0;$i<4;$i++)
  {
    $res=$number[$i];
    if(($res%2)==0)
      echo "The number ".$res." is an even number.<br>";
    else
      echo "The number ".$res." is an odd number.<br>";
  }

?>