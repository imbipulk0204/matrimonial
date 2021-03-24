<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>

<?php
// $value = $_SESSION[$row3];
?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}
?>
<?php
// check self id start
$id = $_SESSION['id'];
if (isset($_POST['jo_idbheja'])) {

    $u_id = $_POST['jo_idbheja'];
    if ($u_id == $id) {

        header("Location:view_profile.php");
    }

}

// check self id end

if (isset($_POST['jo_idbheja'])) {

    $search_id1 = $_POST['jo_idbheja'];

    $sql4 = " SELECT * FROM users WHERE id=$search_id1";
    $result4 = $conn->query($sql4);
    $row4 = $result4->fetch_assoc();
    // $dob=$row['dateofbirth'];
    $name4 = $row4['username'];
    $age4 = $row4['dateofbirth'];
    $gender4 = $row4['gender'];

    $pic1 = "";
    $pic2 = "";
    $pic3 = "";
    $pic4 = "";
    //getting image filenames from db
    $sqlp = "SELECT * FROM photos WHERE cust_id = $search_id1";
    $resultp = $conn->query($sqlp);
    $rowp = $resultp->fetch_assoc();
    $pic1 = $rowp['pic1'];
    $pic2 = $rowp['pic2'];
    $pic3 = $rowp['pic3'];
    $pic4 = $rowp['pic4'];
} else {
    echo "<script>alert(\"Invalid Profile ID\")</script>";
}
// echo $name4;
?>
    <?php
if (isset($_POST['jo_idbheja'])) {

    $search_id = $_POST['jo_idbheja'];

    $sql3 = " SELECT * FROM user_all_details WHERE user_id=$search_id";
    $result3 = $conn->query($sql3);
    $row1 = $result3->fetch_assoc();

}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>SOUL-MATE.COM
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

  <style>
  #paid{

	  margin-left: 400px;
  }

  </style>

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

     <ul>
        <a href="index.php"><i style="color:lightgreen;font-size:35" class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile  </li>
     </ul>
   </div>


   <div class="profile">
   	 <div class="col-md-8 profile_left">
		<!-- <button type="button" class="btn btn-primary">paid <span class="badge">100</span></button> -->
   	 	<h2>Profile Id : <?php echo $search_id1; ?></h2>  <h1><?php echo $name4; ?></h1>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?php echo $search_id1; ?>/<?php echo $pic1; ?>">
							<img  src="profile/<?php echo $search_id1; ?>/<?php echo $pic1; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $search_id1; ?>/<?php echo $pic2; ?>">
							<img  src="profile/<?php echo $search_id1; ?>/<?php echo $pic2; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $search_id1; ?>/<?php echo $pic3; ?>">
							<img  src="profile/<?php echo $search_id1; ?>/<?php echo $pic3; ?>" />
						</li>
						<li data-thumb="profile/<?php echo $search_id1; ?>/<?php echo $pic4; ?>">
							<img  src="profile/<?php echo $search_id1; ?>/<?php echo $pic4; ?>" />
						</li>
					 </ul>
				  </div>
			</div>




			<div style="margin-left:0px" class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $name4; ?></td>
						</tr><tr class="opened_1">
							<td class="day_label">Age :</td>
							<td class="day_value"><?php echo $age4 . "years"; ?> </td>
						</tr>
            <tr class="opened_1">
							<td class="day_label">Height :</td>
							<td class="day_value"><?php echo $row1['height'] . " feet"; ?> </td>
						</tr>
					  	<tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $row1['religion']; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $row1['maritialstatus']; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $row1['country']; ?></td>
						</tr>

					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $row1['education']; ?></span></td>
						</tr>
            <tr class="opened_1">
          <td class="day_label">gender :</td>
          <td class="day_value"><?php if ($gender4 == 1) {
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

  <!-- paid and view from here -->
		<?php
// if (isset($_POST['jo_idbheja'])) {

//     $search_id = $_POST['jo_idbheja'];

$id = $_SESSION['id'];

$sqlp = " SELECT * FROM premium_members WHERE user_id =$id ";
$resultp = $conn->query($sqlp);
//$rowp=$resultp->fetch_assoc();And paid_id =$search_id
if ($rowp = $resultp->num_rows > 0) {

    ?>

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
						<p><?php echo $row1['about']; ?></p>

						<a href="messages/chat.php?id=<?php echo $search_id; ?>" style="margin-top:20px;" class="btn btn-primary">send message</a>

				    </div>
				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $name4; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $row1['maritialstatus']; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $row1['bodytype']; ?></td>
								</tr>


                <tr class="opened">
                <td class="day_label">Height :</td>
                <td class="day_value"><?php echo $row1['height']; ?> inches</td>
              </tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $row1['physicalstatus']; ?></span></td>
								</tr>

						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>

							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $row1['mothertounge']; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $row1['color']; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $row1['weight']; ?> KG</td>
								</tr>

							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $row1['diet']; ?></span></td>
								</tr>

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
									<td class="day_value"><?php echo $row1['caste']; ?></td>
								</tr>

							</tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $row1['religion']; ?></td>
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
									<td class="day_value"><?php echo $row1['education']; ?></td>
								</tr>

							    <tr class="opened">
									<td class="day_label">Annual Income:</td>
									<td class="day_value closed"><span><?php echo $row1['annualincome']; ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
					</div>

					<div class="basic_1 basic_2">
				    	<h3>Contact</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">facebook:</td>
									<td class="day_value"><?php echo "<a href='www.email.cpm'>email</a>"; ?></td>
								</tr>

							    <tr class="opened">
									<td class="day_label">Email:</td>
									<td class="day_value closed"><span><?php echo "<a href='www.facebook.cpm'>facebook</a>"; ?> </span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>

				  </div>
				  <!-- alg haiii -->
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
									<td class="day_value"><?php echo $row1['fatheroccupation']; ?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><?php echo $row1['motheroccupation']; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $row1['noofbros']; ?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $row1['noofsis']; ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
<?php
//getting partner prefernce
    if (isset($_POST['jo_idbheja'])) {
        $search_id2 = $_POST['jo_idbheja'];

        $sql0 = "SELECT * FROM partnerprefs WHERE custId = $search_id2";
        $result0 = $conn->query($sql0);
        $row0 = $result0->fetch_assoc();

        $agemin = $row0['agemin'];
        $agemax = $row0['agemax'];
        $maritalstatus = $row0['maritalstatus'];
        $complexion = $row0['complexion'];
        $height = $row0['height'];
        $diet = $row0['diet'];
        $religion = $row0['religion'];
        $caste = $row0['caste'];
        $mothertounge = $row0['mothertounge'];
        $education = $row0['education'];
        $occupation = $row0['occupation'];
        $country = $row0['country'];
        $descr = $row0['descr'];
    }
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
							    <!-- <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value closed"><span><?php //echo $bodytype; ?></span></td>
								</tr> -->
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed"><span><?php echo $complexion; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height; ?> ft</span></td>
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
								<!-- <tr class="opened">
									<td class="day_label">State :</td>
									<td class="day_value closed"><span><?php //echo $state; ?></span></td>
								</tr> -->
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

		<?php

} else {

    ?>
					 <!-- <form action="paid.php" method="post">
					  <input type="text" value="<?php echo $search_id; ?>"  name="payment_id" hidden>
					 <button id="paid"  class="btn btn-info " style="margin-left:300px" type="submit" name="payment">view all details@<span class="badge">50  </span> </button>
					 </form> -->
					 <!-- <p align="center">or</p> -->
					 <a href="premium_members/members.php" style="margin-left:300px" class="btn btn-primary">Buy Membership    </a>

					 <?php
}

//}
?>
				 <!-- paid  end here  -->
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
 <!-- <div style="position:sticky ;background-color:blue;margin-left:-105px;width:181%;height:50vh;margin-bottom:-160px;margin-top:50px" class="footer">
     <div class="col-sm-4">
        <h1 align="center">footer</h1>
      <h4 style="color:white">About Us</h4>
        <p style="color:white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini </p>
</div>
<div class="col-sm-4">
        <h4 style="color:white">Help & Support</h4>
        <ul class="footer_links">
          <li><a style="color:white" href="#">24x7 Live help</a></li>
          <li><a style="color:white" href="contact.php">Contact us</a></li>
          <li><a style="color:white" href="#">Feedback</a></li>
          <li><a style="color:white" href="faq.php">FAQs</a></li>
        </ul>

</div>
<div class="col-sm-4">
        <h4 style="color:white">Quick Links</h4>
        <ul class="footer_links">
          <li><a style="color:white" href="privacy.php">Privacy Policy</a></li>
          <li><a style="color:white" href="terms.php">Terms and Conditions</a></li>
          <li><a style="color:white" href="services.php">Services</a></li>
        </ul>

</div>

      <!-- <div style="padding-right:0px" class="copy"> -->
        <!-- <p style="color:white">Copyright © 2019 Marital . All Rights Reserved  | Design by <P style="color:white;font-size:30px" ><B>Bipul kumar</B></P> </p>


<ul style="text-align:center"  class="footer_social">
<li  ><a href="https://www.facebook.com/bipul.prasad.75"><i style="color:;background:red" class="fa fa-facebook fa1"> </i></a></li>
<li><a href="https://twitter.com/im_bipul0204"><i style="color:;background:red" class="fa fa-twitter fa1"> </i></a></li>
<li><a href="https://imbipulkumar96130@gmail.com"><i style="color:;background:red" class="fa fa-google-plus fa1"> </i></a></li> -->
<!-- <li><a href="#"><i style="color:;background:red" class="fa fa-youtube fa1"> </i></a></li> -->

</body>
</html>