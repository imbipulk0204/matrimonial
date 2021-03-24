<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {

    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search_by_name</title>
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
<!-- w3 school  -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- w3 school  -->
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--font-Awesome-->
<style>
    .w3-container{
        width: 50%;
      align: center;
      margin-left: 200px;
      margin-top: 30px;


      height: 20rem;

    }
.f{

    background-color: rebeccapurple;
    opacity: ;
    padding-top: 50px;
    box-shadow: 10px 10px 15px lightseagreen;

    /* box-shadow: 15px 20px lightseagreen; */
    border-radius: 0px;
}
.d{
    height: 3rem;
}
.b{
    margin-left: 0px;
}
.w3-input{
    border-radius: 5px;
}
#pro{
    margin-left: 30px;
}
.breadcrumb1{
    margin-top: 50px;

}
.col-md-2{
    margin-left: 65px;
}
</style>
</head>
<?php include "includes/navigation.php"?>
<body>


                <div class="breadcrumb1">
                    <ul id="pro">
                        <a href="index.php"><i style="font-size:30px;color:green" class="fa fa-home home_1 ff"></i></a>
                        <span class="divider">&nbsp;|&nbsp;</span>
                        <li class="current-page">Search By Name</li>
                    </ul>
                </div>

                    <form class="w3-container f col-md-5" action="search_name_function.php" method="post">
                        <p>
                         <!-- <input type="text" hidden> -->
                        <label style="font-size:24px;color:white">Name</label>
                        <input class="w3-input" type="text" name="namesearch" placeholder="enter name"></p> <br> <br>
                        <button type="submit" name="names" class="btn btn-success b">search</button>
                        </form>

                        <div class="col-md-2 match_right">
	<?php include_once "matchright.php";?>
</div>
     <div class="clearfix"> </div>
     <div style="background:#101269;padding-top:40px;margin-top:100px;width:%;height:">
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
        <p style="color:white">Copyright © 2019 Marital . All Rights Reserved  | Design by <P style="color:white;font-size:30px" ><B>Bipul kumar</B></P>
</a> </p>
<div align="" >

<ul  class="footer_social">
<li  ><a href="https://www.facebook.com/bipul.prasad.75"><i style="color:;background:red" class="fa fa-facebook fa1"> </i></a></li>
<li><a href="https://twitter.com/im_bipul0204"><i style="color:;background:red" class="fa fa-twitter fa1"> </i></a></li>
<li><a href="https://imbipulkumar96130@gmail.com"><i style="color:;background:red" class="fa fa-google-plus fa1"> </i></a></li>
<!-- <li><a href="#"><i style="color:;background:red" class="fa fa-youtube fa1"> </i></a></li> -->
</ul>
</div>
        </div>
    </div>
</div>
</body>
</html>
