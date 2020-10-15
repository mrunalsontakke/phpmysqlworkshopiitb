<html>
<h1>Add / Update student record</h1>
<form action="add.php" method="POST">
	<input type="text" name="fullname" placeholder="Name of Student"><br>
	<input type="number" name="rollNo" placeholder="Roll Number"><br>
	<input type="number" name="phpMarks" placeholder="Marks obtained in PHP"><br>
	<input type="number" name="mysqlMarks" placeholder="Marks obtained in MySql"><br>
	<input type="number" name="htmlMarks" placeholder="Marks obtained in HTML"><p>
	<input type="submit" name="submit" value="Enter"><p>
</form>
</html>

<?php
session_start();

@$fullname = $_POST['fullname'];
@$rollNo = $_POST['rollNo'];
@$phpMarks = $_POST['phpMarks'];
@$mysqlMarks = $_POST['mysqlMarks'];
@$htmlMarks = $_POST['htmlMarks'];

@$total = $phpMarks + $mysqlMarks + $htmlMarks ; 
$percent = $total / 3 ;
//testing
//echo $total."<br>";
//echo $percent." %<br>";
//echo $rollNo;
if (isset($_POST['submit'])) {
	require('connectlogin.php');
	if ($percent < 100) {
		$getRollNo = "SELECT * FROM `users` WHERE rollno = '$rollNo'";
		$getRollNo_query = mysqli_query($conn , $getRollNo);
		$numrows = mysqli_num_rows($getRollNo_query);
		if ($numrows != 0) {
			//$getRow = "SELECT * FROM login WHERE ";
			$addStudent = "UPDATE `users` SET `php` =$phpMarks , `mysql` =$mysqlMarks, `html` =$htmlMarks ,`total`=$total ,`percent` =$percent WHERE `rollno` = '$rollNo'";
			$addStudent_query = mysqli_query($conn,$addStudent);
			echo "Marklist updated for Roll No : ".$rollNo."<br>	Php : ".$phpMarks."<br>MySql : ".$mysqlMarks."<br>HTML : ".$htmlMarks;
			echo "<p><a href = 'logoutadmin.php'>Logout</a><p>";
			echo "<a href = 'config.php'>Admin Home Page</a><br>";
		}else
			echo "<P>Check roll number";
		
	}else
	echo "<p>Enter marks between 0 - 100 ";

}else
	echo "Please fill all  fields";
?>