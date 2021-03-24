<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php
if (!isloggedin()) {
    header("location:login.php");
}
?>
<?php
$id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    processprofile_form($id);

}
?>
<?php
$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id=$id ";
$result = mysqlexec($sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);

    $name = $row['username'];
    $dob = $row['dateofbirth'];
    $sex = $row['gender'];
    $email = $row['email'];

}
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Register :: Make My Love
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
        <li class="current-page">Create Your Profile</li>
     </ul>
   </div>
   <div style="" class="container">
   	  <div class="col-sm-12 login_left">
	     <form style="width:100%;height:10vh" action=" " method="POST">
			 
		 
           
            <div class="col-sm-2 form_box2">
               <label for="edit-pass">Religion  <span class="form-required" title="This field is required.">*</span></label>
                     <div class="select-block1">
					 <select name="religion" >
		                    <option value="Not Applicable">Not Applicable</option>
		                    <option value="Hindu">Hindu</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
		                    <option value="Jain">Jain</option>
		                    <option value="Sikh">Sikh</option>

	                    </select>
                    </div>
                    <div class="clearfix"> </div>
                   </div>
					 
				   <div class="col-sm-2 form_box2">
               <label for="edit-pass">caste <span class="form-required" title="This field is required.">*</span></label>
                     <div class="select-block1">
                      <select name="caste" >
                        <option value="general">GENERAL</option>
                        <option value="Roman Cathaolic">Roman Cathaolic</option>
                        <option value="Latin Catholic">Latin Catholic</option>
                        <option value="Penthecost">Penthecost</option>
                        <option value="Mappila">Mappila</option>
                        <option value="Thiyya">Thiyya</option>
                      </select>
                    </div>
                    <div class="clearfix"> </div>
				   </div>
				   

				   <div class="col-sm-2 form_box2">
               <label for="edit-pass">State <span class="form-required" title="This field is required.">*</span></label>
                     <div class="select-block1">
                     <select name="state" >
		                    <option value="">State</option>
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
                    <div class="clearfix"> </div>
				   </div>
				   
                   
				   



            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Country <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country" >
		                    <option  value="Not Applicable">Country</option>
		                    <option value="India">India</option>


	                    </select>
	                  </div>
	            </div>

	        
	                
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>


             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritialstatus" >
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option>
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="profilecreatedby" >
	                    <option value="Self">Self</option>
	                    <option value="Son/Daughter">Son/Daughter</option>
	               		<option value="Other">Other</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education" >
	                    <option value="Primary">Primary</option>
	                    <option value="Tenth level">Tenth level</option>
	               		<option value="+2">+2</option>
	               		<option value="Degree">Degree</option>
	               		<option value="PG">PG</option>
	               		<option value="Doctorate">Doctorate</option>
	                </select>
			    </div>
		    </div>

		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bodytype" >
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option>
	               		<option value="Average">Average</option>
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="physicalstatus">
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option>
	               		<option value="Deaf">Deaf</option>
	                </select>
			    </div>
		    </div>
          

		    <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge">
	                    <option value="Malayalam">Malayalam</option>
	                    <option value="Hindi">Hindi</option>
	               		<option value="English">English</option>
	                </select>
			    </div>
		    </div>
		   
		   
		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		    <div class="col-lg-12">
		   
			<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option>
	               		<option value="Normal">Normal</option>
	                </select>
			    </div>
		    </div>

			<div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet">
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option>

	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>

		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text">
		    </div>



</div>


             <!-- Seventh Row ends-->

           <!-- eighth Row starts-->
           <div class="col-lg-12">
            <div class="form-group col-sm-3">
		    		<label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
			  		<input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500" class="form-text">
		   </div>
           <div class="form-group col-sm-3">
		      <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500" class="form-text">
		    </div>

          <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sis"required>
                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bros"required>
                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit btn btn-primary">
			  </div>
			  </div>
             <!-- eighth Row ends-->
         <hr/>


		 </form>
	  </div>

	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once "footer.php";?>

</body>
</html>
