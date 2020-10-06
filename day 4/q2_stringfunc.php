
<form action='q2_stringfunc.php' method='POST'>
  Enter a string :<input type='text' name='string'>
  <input type='submit' value='submit'>
</form>

<?php

@$string=$_POST['string'] ;
if(isset($string))
{
  echo "String :".$string."<br><br>";

  $length=strlen($string);
  echo  "The number of characters in this string are : ".$length."<br>" ;

  $explode=explode(" ",$string);
  foreach($explode as $value)
  {
    echo "After breaking the string into an array : ".$value."<br>" ;
  }

  $strrev=strrev($string);
  echo "After reversing the string : ".$strrev."<br>";

  $strtolower =strtolower($string);
  echo "All characters in lower case form  : ".$strtolower."<br>";

  $strtoupper =strtoupper($string);
  echo "All characters in upper case form  : ".$strtoupper."<br>";

  $replace=substr_replace($string," Mrunal",13);
  echo " After replacing the substring : ".$replace."<br>" ;

}
?>
