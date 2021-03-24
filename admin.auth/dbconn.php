
<?php 

$host="localhost"; // Host name 
$username="matrimonial"; // Mysql username 
$password="matrimonial020497@"; // Mysql password 
$db_name="matrimonial"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("localhost", "matrimonial", "matrimonial020497@")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>