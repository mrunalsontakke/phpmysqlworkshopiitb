
<form action='q3_uploadfile.php' method='POST' enctype='multipart/form-data'>
  <h1> Upload a file : </h1>
  <input type='file' name='myfile'><p>
  <input type='submit' name='submit' value='Upload'><p>
</form>

<?php

@$name= $_FILES['myfile']['name'] ;
@$type= $_FILES['myfile']['type'] ;
@$size= $_FILES['myfile']['size'] ;
@$tmp = $_FILES['myfile']['tmp_name'];
@$error=$_FILES['myfile']['error'];

if($error>0)
{
   die("Error while uploading file ! code ".$error);
}
else
{
    if($_POST['submit'])
    {
      move_uploaded_file($tmp,"uploaded/".$name);
      echo "Upload Completed Sucessfully !";
      echo "<br>NAME :".$name."<br>";
      echo "TYPE :".$type ;
     }
}

?>

