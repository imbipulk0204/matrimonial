<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}

?>
<?php
//$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Search :: Make My Love
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
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <script type="text/javascript">
    // $(function () {
    //  $('#btnRadio').click(function () {
    //       var checkedradio = $('[name="gr"]:radio:checked').val();
    //       $("#sel").php("Selected Value: " + checkedradio);
    //   });
    // });
   </script>
<div class="col-md-9 search_left">
  <form action="searchbydetails.php" method="post">
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="gender" value="1" <?php echo "checked"; ?>/> Groom &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="gender" value="0"/> Bride

	</div>
	<div class="clearfix"> </div>
</div>


  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Marital Status">Marital Status : </label>
	<div class="col-sm-7 form_radios">

    <input type="radio" class="radio_1" name="status" value="Single" <?php echo "checked"; ?>/> Single  &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="status" value="Diverced">  Divorced &nbsp;&nbsp;
    <input type="radio" class="radio_1" name="status" value="Widowed"> Widowed &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="status" value="Separated">Separated &nbsp;&nbsp;
   


		<!-- <input type="checkbox" class="radio_1" name="maritialstatus" value="Single" <?php echo "checked" ?>/> Single &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritialstatus" value="divorced" /> Divorced &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritialstatus" value="widowed" /> Widowed &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritialstatus" value="seperated"/> Separated &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritialstatus" value="any" /> Any -->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="country">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="country">
            <option value="">Country</option>

            <option value="india">India</option>

          </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>

  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="State">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="state" required>
            <option value="">State</option>
            <option value="assam">Assam</option>
            <option value="kerala">meghalay</option>
            <option value="delhi">Delhi</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Madhyapradesh">Madhyapradesh</option>
            <option value="goa">Goa</option>
            <option value="himachal pradesh">himachal pradesh</option>
            <option value="punjab">punjab</option>
            <option value="west bengal">west bengal</option>
            <option value="sikkim">sikkim</option>
            <option value="uttar pradesh">uttar pradesh</option>
            <option value="rajasthan">rajasthan</option>
            <option value="tamil nadu">tamil nadu</option>
            <option value="nagaland">nagaland</option>
            <option value="odisha">odisha</option>
            <option value="tripura">tripura</option>
            <option value="mizoram">mizoram</option>
            <option value="manipur">manipur</option>
            <option value="jharkhand">jharkhand</option>
            <option value="gujrat">gujrat</option>
        </select>

      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
            <option value="">Religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain-All">Jain-All</option>
            <option value="Jain-Digambar">Jain-Digambar</option>
            <option value="Jain-Others">Jain-Others</option>
            <option value="Muslim-All">Muslim-All</option>
            <option value="Muslim-Shia">Muslim-Shia</option>
            <option value="Muslim-Sunni">Muslim-Sunni</option>
            <option value="Muslim-Others">Muslim-Others</option>
            <option value="Christian-All">Christian-All</option>
            <option value="Christian-Catholic">Christian-Catholic</option>
            <option value="Jewish">Jewish</option>
            <option value="Inter-Religion">Inter-Religion</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="mothertounge">
            <option value="Malayalam">Malayalam</option>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Telugu">Telugu</option>
            <option value="Bengali">Bengali</option>
            <option value="Bihari">Bihari</option>
            <option value="Hindi">Hindi</option>
            <option value="Tamil">Tamil</option>
            <option value="Urdu">Urdu</option>
            <option value="Manipuri">Manipuri</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>


  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Age">Age : </label>
	<div class="col-sm-7 form_radios">
	  <div class="col-sm-5 input-group1">
        <input style="margin-left:-16px" class="form-control has-dark-background" name="agemin" id="slider-name" placeholder="18" type="text" required=""/> 
     
      </div>
              
      <div class="col-sm-5 input-group1 ">
      
        <input class="form-control has-dark-background" name="agemax" id="slider-name" placeholder="40" type="text" required=""/>
      </div>
      <div class="clearfix"> </div>
	</div>  
	<div class="clearfix"> </div>
  <input class="btn btn-info" type="submit" name="search" value="Search"/>
  </div>
 </form>
 <!-- <div class="paid_people">
   <h1>Profiles</h1> -->
<?php
//only start display profiles if and only if search is triggered
// if (isset($_POST['search'])) {

// //code to print matching profiles

// // couloumn count

//     $c_count = '1';

//     while ($row = mysqli_fetch_assoc($result)) {

//         $profid = $row['cust_id'];
//         //getting photo for display
//         $sql = "SELECT * FROM photos WHERE cust_id=$profid";
//         $result2 = mysqlexec($sql);
//         $photo = mysqli_fetch_assoc($result2);
//         $pic = $photo['pic1'];
//         // printing left side profile
//         echo "<div class=\"row_1\">"; //starting row
//         if ($c_count == '1') {

//             echo "<div class=\"col-sm-6 paid_people-left\">"; //left statrted
//             echo "<ul class=\"profile_item\">";
//             echo "<a href=\"view_profile.php?id=$profid\">";
//             echo "<li class=\"profile_item-img\"><img src=\"profile/" . $profid . "/" . $pic . "\"" . "class=\"img-responsive\" alt=\"\"/></li>";
//             echo "<li class=\"profile_item-desc\">";
//             echo "<h4>" . $row['religion'] . " " . $row['caste'] . "</h4>";
//             echo "<p>" . $row['state'] . "Yrs," . $row['country'] . "</p>";
//             echo "<h5>" . "View Full Profile" . "</h5>";
//             echo "</li>";
//             echo "</a>";
//             echo "</ul>";
//             echo "</div>"; //left end
//             $c_count++;
//         } else {
//             echo "<div class=\"col-sm-6\">"; //right statrted
//             echo "<ul class=\"profile_item\">";
//             echo "<a href=\"view_profile.php?id=$profid\">";
//             echo "<li class=\"profile_item-img\"><img src=\"profile/" . $profid . "/" . $pic . "\"" . "class=\"img-responsive\"";
//             echo "alt=\"\"/></li>";
//             echo "<li class=\"profile_item-desc\">";
//             echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
//             echo "<p>" . $row['age'] . "Yrs," . $row['religion'] . "</p>";
//             echo "<h5>" . "View Full Profile" . "</h5>";
//             echo "</li>";
//             echo "</a>";
//             echo "</ul>";
//             echo "</div class=\"test\">"; //right end

//             // end of right side

//             $c_count = '1';
//         }
//         echo "</div>"; //row end
//     } //loop end

// } //end of if
?>

  </div>
</div>
<!-- Match Right Starts -->
<div class="col-md-3 match_right">
  <?php //include_once "matchright.php";?>
</div>
<!-- Match Right ends -->
     <div class="clearfix"> </div>
  </div>
</div>


<?php include_once "footer.php";?>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	// $(function(){
	//   SyntaxHighlighter.all();
	// });
	// $(window).load(function(){
	//   $('.flexslider').flexslider({
	// 	animation: "slide",
	// 	start: function(slider){
	// 	  $('body').removeClass('loading');
	// 	}
	//   });
	// });
  </script>
<!-- FlexSlider -->

<?php
// $dob = '1981-10-07';
// $diff = (date('Y') - date('Y', strtotime($dob)));
// echo $diff;
?>
</body>
</html>
