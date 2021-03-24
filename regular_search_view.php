<?php include 'functions.php';?>
<?php include_once "includes/basic_includes.php";?>
<?php require_once "includes/dbconn.php";?>
<?php if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}
?>

 <?php
$id = $_SESSION['id'];

?>
	 <?php

if (isset($_POST[''])) {

    $sqls = "SELECT * FROM  profle WHERE maritialstatus=$status AND country=$country AND  ";
} else {

}
?>

<?php

if (isset($_POST["u_id"])) {

    $user_id = $_POST['u_id'];

    $sql = "SELECT * FROM profle WHERE cust_id= $user_id ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $religion = $row['religion'];
        $caste = $row['caste'];
        $country = $row['country'];
        $state = $row['state'];
        $district = $row['district'];
        $maritalstatus = $row['maritialstatus'];
        $profileby = $row['profilecreatedby'];
        $education = $row['education'];
        $bodytype = $row['bodytype'];
        $physicalstatus = $row['physicalstatus'];
        $drink = $row['drink'];
        $smoke = $row['smoke'];
        $mothertounge = $row['mothertounge'];
        $bloodgroup = $row['bloodgroup'];
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
    } else {
        $_SESSION['message'] = "No such User Found";
        header('Location:search-id.php');
    }
}
?>
<?php
if (isset($_POST["u_id"])) {
    $button = "Follow";
    $user_id = $_POST['u_id'];
    $id = $_SESSION['id'];
    $sql2 = "select * from friend where user_id = $id and friend_id = $user_id";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        $button = "Following";
    }
    $sql = " SELECT * FROM users WHERE id=$user_id";
    $result = mysqlexec($sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        // $dob=$row['dateofbirth'];
        $name = $row['username'];
        $age = $row['dateofbirth'];
        $gender = $row['gender'];
    }
}
?>

<?php

if (isset($_POST["follow"])) {

    $id = $_SESSION['id'];
    $frnd = $_POST["user_id"];
    $sql = "select * from friend where user_id = $id and friend_id = $frnd";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $sql = "INSERT into friend (user_id,friend_id,confirmation) VALUES ($id,$frnd,0) ";
        $conn->query($sql);
        $_SESSION['message'] = "Friend Added sucessfully";
        header('Location:index.php');
    } else {
        $_SESSION['message'] = "You already have made a request to this user";
        header('Location:index.php');
    }
}

?>
 <?php

$self_id = $_SESSION['id'];

$sql = "SELECT * from friend where  friend_id = $self_id";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <!--font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once 'includes/navigation.php';?>

    <h1> <?php echo $religion; ?> welcome to user view</h1>
    <div class="container">
     <div class="breadcrumb1">
       <ul>
          <a href="index.php"><i style="color:lightgreen;font-size:35" class="fa fa-home home_1"></i></a>
          <span class="divider">&nbsp;|&nbsp;</span>
          <li class="current-page">View Profile</li>
       </ul>
     </div>

     <?php if ($_SESSION['id'] == $user_id || $self_id == $user_id) {

} else {?>
        <!-- <a href="process.php?send='.$row['id'].'" class="retweet_link"><div id="button_style1">Add Friend</div></a><br>'; -->

        <form method="POST">
          <div style="margin-left:50%;" class="col-md-2">
            <p id="demo">
              <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden >
              <input value=" <?php echo $button; ?>"
                id="button" style="font-size:20px"
                 class="btn btn-info" type="submit" name="follow">
            </p>
          </div>
        </form>
    <?php }
?>
     <!-- Add friend<sup style=\"font-size:20px\"><B>+</B></sup></button> -->
     <script type="text/javascript">
   function addfriend(){

       alert("hello bipul kumar");
       var a=document.getElementById("button");
    document.getElementById("demo").innerHTML= "<B>friend request send by you : </B>"+ a.value;
       }
     </script>
     <?php
$sql69 = "SELECT * FROM photos WHERE cust_id = $user_id";
$result69 = $conn->query($sql69);
if ($result69) {
    $row69 = $result69->fetch_assoc();
    $pic1 = $row69['pic1'];
    $pic2 = $row69['pic2'];
    $pic3 = $row69['pic3'];
    $pic4 = $row69['pic4'];
}
?>
     <div class="profile">
     	 <div class="col-md-8 profile_left">
     	 	<h2>Profile Id : <?php echo $user_id; ?></h2>  <h1><?php echo $name; ?></h1>
     	 	<div class="col_3">

     	        <div class="col-sm-4 row_2">
  				<div class="flexslider">
  					 <ul class="slides">
  						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic1; ?>">
  							<img src="profile/<?php echo $user_id; ?>/<?php echo $pic1; ?>" />
  						</li>
  						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic2; ?>">
  							<img src="profile/<?php echo $user_id; ?>/<?php echo $pic2; ?>" />
  						</li>
  						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic3; ?>">
  							<img src="profile/<?php echo $user_id; ?>/<?php echo $pic3; ?>" />
  						</li>
  						<li data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic4; ?>">
  							<img src="profile/<?php echo $user_id; ?>/<?php echo $pic4; ?>" />
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
  							<td class="day_value"><?php echo $height . " inches"; ?> </td>
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
  					    <tr class="closed">
  							<td class="day_label">Profile Created by :</td>
  							<td class="day_value closed"><span><?php echo $profileby; ?></span></td>
  						</tr>
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
                  <td class="day_value"><?php echo $height; ?> inches</td>
                </tr>
  							    <tr class="opened">
  									<td class="day_label">Physical Status :</td>
  									<td class="day_value closed"><span><?php echo $physicalstatus; ?></span></td>
  								</tr>
  							    <tr class="opened">
  									<td class="day_label">Profile Created by :</td>
  									<td class="day_value closed"><span><?php echo $profileby; ?></span></td>
  								</tr>
  								<tr class="opened">
  									<td class="day_label">Drink :</td>
  									<td class="day_value closed"><span><?php echo $drink; ?></span></td>
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
  							    <tr class="opened">
  									<td class="day_label">Blood Group :</td>
  									<td class="day_value"><?php echo $bloodgroup; ?></td>
  								</tr>
  							    <tr class="closed">
  									<td class="day_label">Diet :</td>
  									<td class="day_value closed"><span><?php echo $diet; ?></span></td>
  								</tr>
  							    <tr class="closed">
  									<td class="day_label">Smoke :</td>
  									<td class="day_value closed"><span><?php echo $smoke; ?></span></td>
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
  									<td class="day_value closed"><span><?php echo $height; ?> Cm</span></td>
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

          <div class="view_profile view_profile2">
          	<h3 style="margin-left:100px">View Recent Profiles</h3>

       <?php

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqlexec($sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);

    $gender = $row['gender'];

    if ($gender == 0) {

        $sql1 = "SELECT * FROM users WHERE  gender=1 ";
        $result1 = mysqlexec($sql1);
        $count = 1;
        while ($row1 = mysqli_fetch_assoc($result1)) {
            echo "<h2>" . $row1['username'] . "</h2>";
        }

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

?>

  </div>

          </div>
         <div class="clearfix"> </div>
      </div>
    </div>
  </div>

  <?php include_once "footer.php";?>
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
