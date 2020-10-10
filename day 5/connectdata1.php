<?php
error_reporting(0);

// Create connection
$conn = mysqli_connect("localhost","root","","data1") or die("Connection failed: ".mysqli_connect_error());

echo "Connected !<br>";

?>