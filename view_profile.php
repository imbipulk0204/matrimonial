<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>

<?php

$id = $_SESSION['id'];

$sql = "select * from premium_members where user_id=$id ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$expiry_date = $row['issue_date'];
$duration = $row['duration'];

$today = date('Y-m-d');

$datetime1 = strtotime(date('Y-m-d', strtotime($expiry_date)));
$datetime2 = strtotime(date('Y-m-d', strtotime($today)));

$secs = $datetime2 - $datetime1; // == <seconds between the two times>
$days = $secs / 86400;

?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}

$id = $_SESSION['id'];
$user_id = $id;

//getting profile details from db
$sql = "SELECT * FROM user_all_details WHERE user_id = $user_id";
$result = mysqlexec($sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);

    $religion = $row['religion'];
    $caste = $row['caste'];
    $country = $row['country'];
    $state = $row['state'];
    $maritalstatus = $row['maritialstatus'];
    $education = $row['education'];
    $bodytype = $row['bodytype'];
    $physicalstatus = $row['physicalstatus'];
    $mothertounge = $row['mothertounge'];
    $weight = $row['weight'];
    $height = $row['height'];
    $colour = $row['color'];
    $diet = $row['diet'];
    $occupation = $row['occupation'];
    $fatheroccupation = $row['fatheroccupation'];
    $motheroccupation = $row['motheroccupation'];
    $income = $row['annualincome'];
    $bros = $row['noofbros'];
    $sis = $row['noofsis'];
    $aboutme = $row['about'];

//end of getting profile detils

    $pic1 = "";
    $pic2 = "";
    $pic3 = "";
    $pic4 = "";
//getting image filenames from db
    $sql2 = "SELECT * FROM photos WHERE cust_id = $user_id";
    $result2 = mysqlexec($sql2);
    if ($result2) {
        $row2 = mysqli_fetch_array($result2);
        $pic1 = $row2['pic1'];
        $pic2 = $row2['pic2'];
        $pic3 = $row2['pic3'];
        $pic4 = $row2['pic4'];
    }
} else {
    echo "<script>alert(\"Invalid Profile ID\")</script>";
}
?>
<?php
$id = $_SESSION['id'];

$sql = " SELECT * FROM users WHERE id=$id";
$result = mysqlexec($sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);

    $name = $row['username'];
    $age = $row['dateofbirth'];
    $gender = $row['gender'];

}
?>
<?php
$user_id = $_SESSION['id'];
$sqlb = " SELECT * from balance where user_id = $user_id ";
$resultb = $conn->query($sqlb);
$rowb = $resultb->fetch_assoc();
$balance = $rowb['balance'];

?>

<!DOCTYPE HTML>
<html>
<head>
<title>SOUL-MATE.COM
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--font-Awesome-->

</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once "includes/navigation.php";?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <?php
//echo 'Current script owner: ' . get_current_user();
?>
  <div class="container">
   <div class="breadcrumb1">
   <!-- <button class="btn btn-primary"> <a href="premium_members/members.php">buy membership</a></button> <?php // echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$id."'>x</a></td><tr>"; //use double quotes for js inside php!
?> -->
     <ul>
        <a href="index.php"><i style="color:lightgreen;font-size:35" class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
		<li class="current-page">View Profile <h6 style="margin-left:650px;font-size:19px">
		 <li> <form action="delete.php" method="post">
		     <input type="text" name="delete" value="<?php echo $user_id; ?>"hidden>
			<button class="btn btn-danger"  onclick="javascript: return confirm('Please confirm deletion')";>delete account</button>
		 </form> </li>
		<?php
if ($duration == 1 || $duration == 2 || $duration == 3) {
    if ($duration == 1) {
        if ($days > 31) {

            $sql345 = "DELETE FROM premium_members where user_id=$user_id ";
            $result = $conn->query($sql345);
            ?>

		 <a class="btn btn-primary" style="color:black;font-size:20px" href="premium_members/members.php">buy membership</a>
		 <?php
} else {
            ?>
					 <a class="btn btn-primary" style="color:black;font-size:20px" href="#">member</a>

			<?php
}
    } else {
    }
    if ($duration == 2) {
        if ($days > 61) {
            $sqldelete1 = "DELETE FROM premium_members where user_id=$user_id ";
            $result = $conn->query($sqldelete1);
            ?>
			 <a class="btn btn-danger" style="color:black;font-size:20px" href="premium_members/members.php">buy membership</a>
			 <?php
} else {
            ?>
					 <a class="btn btn-primary" style="color:black;font-size:20px" href="#">member</a>

			<?php
}
    } else {

    }
    if ($duration == 3) {
        if ($days > 91) {
            $sqldelete = "DELETE FROM premium_members where user_id=$user_id ";
            $result = $conn->query($sqldelete);
            ?>

				 <a class="btn btn-primary" style="color:black;font-size:20px" href="premium_members/members.php">buy membership</a>
				 <?php

        } else {
            ?>
						 <a class="btn btn-primary" style="color:black;font-size:20px" href="#">member</a>

				<?php
}
    } else {

    }
} else {
    ?>
			<a class="btn btn-success" style="color:black;font-size:20px" href="premium_members/members.php">buy membership</a>
<?php
}
?>
		</h6> </li>
		<li></li>
     </ul>
   </div>


   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $user_id; ?></h2>  <h1><?php echo $name; ?></h1>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic1; ?>">
							<img  src="profile/<?php echo $id; ?>/<?php echo $pic1; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic2; ?>">
							<img  src="profile/<?php echo $id; ?>/<?php echo $pic2; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic3; ?>">
							<img  src="profile/<?php echo $id; ?>/<?php echo $pic3; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic4; ?>">
							<img  src="profile/<?php echo $id; ?>/<?php echo $pic4; ?>" />
						</li>
					 </ul>
				  </div>
			</div>




			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $name; ?></td>
						</tr><tr class="opened_1">
							<td class="day_label">Date of birth :</td>
							<td class="day_value"><?php echo $age; ?> </td>
						</tr>
            <tr class="opened_1">
							<td class="day_label">Height :</td>
							<td class="day_value"><?php echo $height . " Feet"; ?> </td>
						</tr>
					  	<tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $maritalstatus; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $country; ?></td>
						</tr>
					    <!-- <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php // echo $profileby; ?></span></td>
						</tr> -->
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $education; ?></span></td>
						</tr>
            <tr class="opened_1">
          <td class="day_label">gender :</td>
          <td class="day_value"><?php if ($gender == 1) {
    echo "male";
} else {
    echo "female";
}?></td>
        </tr>
				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>About Me.</h1>
				    	<p><?php echo $aboutme; ?></p>
				    </div>
				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $name; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $bodytype; ?></td>
								</tr>


                <tr class="opened">
                <td class="day_label">Height :</td>
                <td class="day_value"><?php echo $height; ?> Feet</td>
              </tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $physicalstatus; ?></span></td>
								</tr>

						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>

							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertounge; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $colour; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $weight; ?> KG</td>
								</tr>
							    <!-- <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $bloodgroup; ?></td>
								</tr> -->
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet; ?></span></td>
								</tr>
							    <!-- <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $smoke; ?></span></td>
								</tr> -->
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $caste; ?></td>
								</tr>

							</tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $religion; ?></td>
								</tr>

							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education:</td>
									<td class="day_value"><?php echo $education; ?></td>
								</tr>

							    <tr class="opened">
									<td class="day_label">Annual Income:</td>
									<td class="day_value closed"><span><?php echo $income; ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value"><?php echo $fatheroccupation; ?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><?php echo $motheroccupation; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $bros; ?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $sis; ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>

<?php
//getting partner prefernce
$sql = "SELECT * FROM partnerprefs WHERE custId = $id";
$result = mysqlexec($sql);
$row = mysqli_fetch_assoc($result);

$agemin = $row['agemin'];
$agemax = $row['agemax'];
$maritalstatus = $row['maritalstatus'];
$complexion = $row['complexion'];
$height = $row['height'];
$diet = $row['diet'];
$religion = $row['religion'];
$caste = $row['caste'];
$mothertounge = $row['mothertounge'];
$education = $row['education'];
$occupation = $row['occupation'];
$country = $row['country'];
$descr = $row['descr'];

?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value"><?php echo $agemin . " to " . $agemax; ?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value closed"><span><?php echo $bodytype; ?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed"><span><?php echo $colour; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height; ?> Ft</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span><?php echo $religion; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span><?php echo $caste; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed"><span><?php echo $mothertounge; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><span><?php echo $education; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span><?php echo $occupation; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed"><span><?php echo $country; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">State :</td>
									<td class="day_value closed"><span><?php echo $state; ?></span></td>
								</tr>
                <tr class="opened">
									<td class="day_label">About ideal partner :</td>
									<td class="day_value closed"><span><?php echo $descr; ?></span></td>
								</tr>


							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>

		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     <!-- 	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div> -->
        <div class="view_profile view_profile2">
        	<!-- <h3 style="margin-left:100px">View Recent Profiles</h3> -->
    <?php /*
$sql="SELECT * FROM customer ORDER BY profilecreationdate ASC";
$result=mysqlexec($sql);
$count=1;
while($row=mysqli_fetch_assoc($result)){
$profid=$row['cust_id'];
//getting photo
$sql="SELECT * FROM photos WHERE cust_id=$profid";
$result2=mysqlexec($sql);
$photo=mysqli_fetch_assoc($result2);
$pic=$photo['pic1'];
echo "<ul class=\"profile_item\">";
echo"<a href=\"view_profile.php?id={$profid}\">";
echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
echo "<li class=\"profile_item-desc\">";
echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
echo "<h5>" . "View Full Profile" . "</h5>";
echo "</li>";
echo "</a>";
echo "</ul>";
$count++;
}
 */?>
     <?php

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqlexec($sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);

    $gender = $row['gender'];

    if ($gender == 0) {

        //    $sql2= "SELECT * FROM photos WHERE cust_id=$id ";
        //  $result2= mysqlexec($sql2);
        //  $row2=mysqli_fetch_assoc($result2);
        //  echo $row2['pic1'];
        $sql1 = "SELECT * FROM users WHERE  gender=1 ";
        $result1 = mysqlexec($sql1);
        $count = 1;
        while ($row1 = mysqli_fetch_assoc($result1)) {
            echo "<h2>" . $row1['username'] . "</h2>";
        }

        //  if($result1){
        //  $row1=mysqli_fetch_assoc($result1);
        //   echo  $row1['username'];
        //   $result1=mysqlexec($sql1);
        //   $count=0;
        //   while($row1=mysqli_fetch_assoc($result1)){
        //         $id=$row1['gender'];
        //  $count++;
    } else {

    }
    if ($gender == 1) {
        $sql2 = "SELECT * FROM users WHERE  gender=0 ";
        $result2 = mysqlexec($sql2);
        $count = 1;
        while ($row2 = mysqli_fetch_assoc($result2)) {

            echo "<h4 style='font-size:30px;color:blue;margin-left:100px'>" . $row2['username'] . "</h4>";

        }
    }
}

/*
$result=mysqlexec($sql);
$count=1;
while($row=mysqli_fetch_assoc($result)){
$profid=$row['cust_id'];
//getting photo
$sql="SELECT * FROM photos WHERE cust_id=$profid";
$result2=mysqlexec($sql);
$photo=mysqli_fetch_assoc($result2);
$pic=$photo['pic1'];
echo "<ul class=\"profile_item\">";
echo"<a href=\"view_profile.php?id={$profid}\">";
echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
echo "<li class=\"profile_item-desc\">";
echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
echo "<h5>" . "View Full Profile" . "</h5>";
echo "</li>";
echo "</a>";
echo "</ul>";
$count++;
} */
?>

</div>

        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>

<?php // include_once "footer.php";?>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>

<?php /* if ($id==$id) {

echo    " <div style=\"margin-left:40%;\" class=\"col-md-2\">
<button style=\"font-size:15px\" class=\"btn btn-info\" type=\"button\" name=\"button\">Add friend<sup style=\"font-size:20px\"><B>+</B></sup></button>
</div> ";
}
else {
echo    " <div style=\"margin-left:40%;\" class=\"col-md-2\">
<button style=\"font-size:20px\" class=\"btn btn-info\" type=\"button\" name=\"button\">Add friend<sup style=\"font-size:20px\"><B>+</B></sup></button>
</div> ";
}?>           */
