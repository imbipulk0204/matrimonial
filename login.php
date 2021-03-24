<?php include_once "functions.php";?>
<?php include_once "includes/flashmessage.php";?>

<!DOCTYPE HTML>
<html>
<head>
<title>Makemy Love</title>
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
<script>  /*
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
}); */
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once "includes/navigation.php";?>
<!-- ============================  Navigation End ============================ -->
<!--  <div align="center" style="background-color:blue ;width:30%;height:40vh; border:2px solid yellow;margin-top:119px; margin-left:40px" class="col-sm-2">
  <ul>
  <li style="font-size:150px;">AD</li>

</ul>
</div>  -->
<div style="border:px solid green;padding-left:60px;margin-top:" class="grid_3">
  <div style="border:px solid blue;margin-left:0px;margin-top:-15px;" class="container">
   <div style="border:px solid black;margin-left:100px;" class="breadcrumb1">
     <ul>
         <?php flash_messages();?>
        <a href="index.php"><i style="color:green;font-size:30px" class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>

     </ul>
   </div>

   <div style="margin-left:400px;"class="services">
   	  <div style="border:px solid red;" class="col-sm-6 login_left">
	   <form action="auth/auth.php?user=1" method="post">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label  for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
	    </div>
	    <div align="center" style="margin-top:15px; margin-left:200px" class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn btn-primary">
	    </div>
    <!--  <ul align="center" style="margin-top:20px;">
        <h4>or</h4>
        <span></span>
               <button class="btn btn-info" type="button" name="button"><a  style="color:green" href="register.php"  <li class="current-page">Register</li></a></button>
      </ul>  -->
	   </form>
   </div>  <!--
    <div style="background-color:blue; border:2px solid lightgreen;padding-left:50px; width:30%; height:40vh; margin-left:120px;" class="col-sm-2">
      <ul class="sharing">
        <li align="center" style="font-size:100px;">AD</li>

    </ul>
  </div>  -->


	  <div class="clearfix"> </div>
   </div>
  </div>
</div>



<?php include_once "footer.php";?>


