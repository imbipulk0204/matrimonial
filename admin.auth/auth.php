<?php session_start(); ?>
<?php
$host="localhost"; // Host name
$username="matrimonial"; // Mysql username
$password="matrimonial020497@"; // Mysql password
$db_name="matrimonial"; // Database name

// Connect to server and select databse.
$conn=mysqli_connect($host, $username, $password)or die("cannot connect");

mysqli_select_db($conn,$db_name)or die("cannot select DB");

//if($result = mysqli_query($conn, $sql)){
	//return $result;
//}
//else{
//	echo mysqli_error($conn);
//}
?>
<?php
//session_start();
//require_once("includes/dbconn.php");
//$userlevel=$_GET['user'];
// username and password sent from form
if (isset($_POST['button'])) {

$user_id=$_POST['id'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$user_id = stripslashes($user_id);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM admin WHERE user_id = $user_id AND password = '$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['user_id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//	$_SESSION['$user_id']= $user_id;
//	$_SESSION['id']=$id;
	//if($userlevel=='1')
	//	header("location:../index.php?id={$row['id']}"); //?id={$row['id']}
//}else {

	  header("location:../adminpanel/adminpanelindex.php");

	//	header("location:../admin.php");
}
else { ?>
	<script type="text/javascript">
			 alert("please enter valid id and password");
			 location.replace("../adminPanel.php")
			 //window.location("../adminPanel.php");
	</script>
  <?php
       //header('Location: ../adminPanel.php');
}
}

?>
