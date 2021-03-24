<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
  <?php include "includes/dbconn.php";?>
<?php

$id = $_SESSION['id'];
if (isloggedin()) {

} else {
    header("location:login.php");
}
$sql = "select * from user_all_details where user_id=$id";
$r = $conn->query($sql);
//$row = $r->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Home</title>
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

</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once "includes/navigation.php";?>
<!-- ============================  Navigation End ============================ -->

  <div style="margin-top:50px;margin-bottom:10px;height:auto;vertical-align: top;width:50%" class="container col-md-6">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i style="color:lightgreen;font-size:20px" class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">User Home</li>
     </ul>
   </div>
   <div class="navigation" style="box-shadow:10px 15px lightblue;background-color: darkcyan;margin-left: 100px;font-size:30px;width:40%;margin-bottom:0px"> <!-- Innernavigation starts -->

   	  	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="view_profile.php?id=<?php echo $id; ?>"><i class="fa fa-user" aria-hidden="true"></i>
View Profile</a></li> <br> <br>

 <?php if ($row = $r->num_rows==1) {
    ?>
             <li><a href="createProfile/create_user-profile.php?id=<?php echo $id; ?>"><i class="fa fa-user" aria-hidden="true"></i>update Profile</a></li> <br> <br>
 <?php } else {
    ?>
               <li><a href="createProfile/create_user-profile.php?id=<?php echo $id; ?>"><i class="fa fa-user" aria-hidden="true"></i>Create Profile</a></li> <br> <br>
<?php
}
?>

		            <li><a href="partner_preference.php?id=<?php echo $id; ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Partner Preference</a></li> <br><br>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		               <li><a href="photouploader.php?id=<?php echo $id; ?>"><i class="fa fa-upload" aria-hidden="true"></i>
Upload Photos</a></li>
		               <li><a href="view_profile.php?id=<?php echo $id; ?>"><i class="fa fa-user" aria-hidden="true"></i>View Profile</a></li>
		               <li><a href="createProfile/create_user-profile.php?id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Profile</a></li>
		              </ul>
		            </li> <br> <br>
					<!-- <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="faq.php">Faq</a></li>
		              </ul>
                </li> <br> -->

                <!-- <li><a href="friend_request.php?id=<?php echo $id; ?>">friend request</a></li> <br> <br> -->
                <li><a href="friend_request.php?id=<?php echo $id; ?>"><i class="fa fa-users" aria-hidden="true"></i>friends</a></li> <br> <br>
                <li><a href="payment.php?id=<?php echo $id; ?>"><i class="fa fa-credit-card" aria-hidden="true"></i>add money</a></li> <br> <br>

                <li><a href="userCupons.php?id=<?php echo $id; ?>"><i class="fa fa-user" aria-hidden="true"></i>Your cupons</a></li>

		        </ul>
      </div>
		 </div>
    <!-- End of inner navigation -->
</div>

  <!-- colm3 -->
  <div class="container col-md-3">
    <div>

    </div>
  </div>
<!--end  -->
<!-- colm3  -->

 <div style="margin-top:150px" class="container col-md-3">
   <div>
   <h1>view recent profile</h1>
   <ul>
     <li>bipul</li>
     <li>kumar</li>
   </ul>
   </div>
 </div>

<!--end  -->


<!--style="border:px solid blue;margin-left:;margin-right:px;height:10vh;" class="footer">  -->
<div style="background:#101269;padding-top:40px;margin-top:690px;width:%;height:">
  <!--	 align="center" style="padding-left:10px;margin-bottom:"  class="container">  -->
     <div style="background:">
      <div style="margin-left:100px;" class="col-md-4">
        <h4 style="color:white">About Us</h4>
        <p style="color:white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini </p>
      </div>
      <div class="col-md-2 col_2">
        <h4 style="color:white">Help & Support</h4>
        <ul class="footer_links">
          <li><a style="color:white" href="#">24x7 Live help</a></li>
          <li><a style="color:white" href="contact.php">Contact us</a></li>
          <li><a style="color:white" href="#">Feedback</a></li>
          <li><a style="color:white" href="faq.php">FAQs</a></li>
        </ul>
      </div>
      <div class="col-md-2 col_2">
        <h4 style="color:white">Quick Links</h4>
        <ul class="footer_links">
          <li><a style="color:white" href="privacy.php">Privacy Policy</a></li>
          <li><a style="color:white" href="terms.php">Terms and Conditions</a></li>
          <li><a style="color:white" href="services.php">Services</a></li>
        </ul>
      </div>

      <div class="clearfix"> </div>
      <div style="padding-right:0px" class="copy">
        <p style="color:white">Copyright © 2019 Marital . All Rights Reserved  | Design by <P style="color:blue;" ><B>Bipul kumar</B></P>
</a> </p>
<div align="" >

<ul class="footer_social">
<li  ><a href="https://www.google.com"><i style="color:;background:lightblue" class="fa fa-facebook fa1"> </i></a></li>
<li><a href="#"><i style="color:;background:blue" class="fa fa-twitter fa1"> </i></a></li>
<li><a href="#"><i style="color:;background:blue" class="fa fa-google-plus fa1"> </i></a></li>
<li><a href="#"><i style="color:;background:blue" class="fa fa-youtube fa1"> </i></a></li>
</ul>
</div>
        </div>
    </div>
</div>
</body>
</html>
