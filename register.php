
<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php register();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony
 | Register :: Matrimony
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

   <style>

   input[type="radio"]{
  /* margin: 10px 10px 10px 10px; */
}
   </style>


</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once "includes/navigation.php";?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div style="border:px solid blue;margin-left:160px;" class="col-sm-6 login_left">
	     <form action=" " method="POST">
	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required" placeholder="create your account password"required>
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required"required>
		    </div>
		    <div class="age_select">
		      <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid form-inline">
		         <div class=" form_box ">
                  <div class=" col-sm-4 select-block1 ">
					  <input class ="form-control " style="width:60%;margin-left:-12px" type="text" name="age" name="age" placeholder="enter age">



				  </div>

				  <div style="margin-left:70px" class="col-sm-6">
					  <label style="font-size:15px" for="radio-01" class="label_radio">
				            <input style=""  type="radio" name="gender" value="1" checked> <B> Male</B>
				        </label>
				        <label style="font-size:15px" for="radio-02" class="label_radio">
				            <input style="margin-left:20px"  type="radio" name="gender" value="0"> <B> Female</B>
						</label>
                     </div>


                  </div>
                  <div class="clearfix"> </div>
				 </div>


			  </div>

              <div  class="form-group form-group1">
			  <!-- <label class="col-sm- control-lable" for="sex">Sex : </label> <br> -->


                <div class="clearfix"> </div>
             </div>

			  <div class="form-actions">
			    <input style="width:" type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit form-control">
			  </div>
		 </form>
	  </div>
	  <div  style="border:px solid green;margin-left:70%;margin-right:50px" class="">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once "footer.php";?>
