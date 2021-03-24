<?php include_once "../includes/basic_includes.php";?>
<?php include_once "../functions.php";?>
<?php
if (!isloggedin()) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <!--font-Awesome-->
        <link href="../css/font-awesome.css" rel="stylesheet">
        <!--font-Awesome-->
    <title>Create Profile</title>
    <style>
        #l{

        }
        .form-control{
            height:6vh;
        }
        form{
            background-color: blueviolet;
        }
        .breadcrumb{
            background-color: whitesmoke;
        }
        </style>
</head>
<body>
    <?php include "../includes/navigation.php";?>
           
                 <div align="center" class="breadcrumb">
                <div class="container">
                    <h1>create Profile</h1>
            <form  style="width:50%;border:px solid blue;padding:20px 20px 20px 20px" class="form-group" method="post" action="createController.php">
  <div class="">
    <label id="l" for="formGroupExampleInput">Religion</label>
    <select name="religion" required >
		                    <option value=""disabled selected> religion</option>
		                    <option value="Hindu">Hindu</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
		                    <option value="Jain">Jain</option>
		                    <option value="Sikh">Sikh</option>

	                    </select>

    <label id="l" for="formGroupExampleInput2">caste</label>
    <select name="caste" required >
        <option value=""disabled selected>Caste</option>
                        <option value="general">GENERAL</option>
                        <option value="Roman Cathaolic">Roman Cathaolic</option>
                        <option value="Latin Catholic">Latin Catholic</option>
                        <option value="Penthecost">Penthecost</option>
                        <option value="Mappila">Mappila</option>
                        <option value="Thiyya">Thiyya</option>
                      </select>
  </div>

  <div class="form-group">
    <label id="l" for="formGroupExampleInput">Country</label>
    <select name="country" required >
		                    <option  value=""disabled selected>Country</option>
		                    <option value="India">India</option>


	                    </select>                                    <br>
  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">State</label>
    <select name="state" required >
		                    <option value=""disabled selected>State</option>
		                    
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
	                    </select> <br>
  </div>


  <div class="form-group">
    <label id="l" for="formGroupExampleInput">maritialstatus</label>
    <select name="maritialstatus" required >
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option>
	               		<option value="Divorsed">Divorsed</option>
	                </select> <br>
  </div>
  

  <div class="form-group">
    <label id="l" for="formGroupExampleInput">Education</label>
    <select name="education" required >
        <option value=""disabled selected>Education</option>
	                    <option value="Primary">Primary</option>
	                    <option value="Tenth level">Tenth level</option>
	               		<option value="+2">+2</option>
	               		<option value="Degree">Degree</option>
	               		<option value="PG">PG</option>
	               		<option value="Doctorate">Doctorate</option>
	                </select>
  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">body Type</label>
    <select name="bodytype" >
            <option value=""disabled selected>Body type</option>
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option>
	               		<option value="Average">Average</option>
	                </select>
  </div>


  <div class="form-group">
    <label id="l" for="formGroupExampleInput">physical status</label>
    <select name="physicalstatus" required >
        <option value=""disabled selected>Physical status</option>
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option>
	               		<option value="Deaf">Deaf</option>
	                </select>
  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Mother Tounge</label>
    <select name="mothertounge" required >
        <option value=""disabled selected>Mother tounge</option>
	                    <option value="Malayalam">Malayalam</option>
	                    <option value="Hindi">Hindi</option>
	               		<option value="English">English</option>
	                </select>
  </div>


  <div class="form-group">
    <label id="l" for="formGroupExampleInput">Color</label>
    <select name="color" required >
        <option value=""disabled selected>color</option>
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option>
	               		<option value="Normal">Normal</option>
	                </select>
  </div>
  
         
  <div class="form-group">
    <label id="l" for="formGroupExampleInput">Diet</label>
    <select name="diet" required >
        <option value=""disabled selected>diet</option>
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option>

	                </select>
    
  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">No of sisters</label>
    <select name="noofsis" required >
                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                </select>
    
  </div>

  <div class="form-group">
    <label id="l" for="formGroupExampleInput">No of Brothers</label>
    <select name="noofbros" required >
                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                </select>
  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Height*</label>
    <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text" required >

  </div>
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Weight</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="weight" required > <br>
  </div>
   
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Occupation</label>
    <input type="text" class="form-control" name="occupation" id="formGroupExampleInput2" placeholder="" required > <br>
  </div>

  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Income</label>
    <input type="text" class="form-control" name="income" id="formGroupExampleInput2" placeholder="" required > <br>
  </div>
  
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Father Occupation</label>
    <input type="text" class="form-control" name="fatheroccupation" id="formGroupExampleInput2" placeholder="" required > <br>
  </div>
   
  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">Mother Occupation</label>
    <input type="text" class="form-control" name="motheroccupation" id="formGroupExampleInput2" placeholder="" required> <br>
  </div>

  <div class="form-group">
    <label id="l" for="formGroupExampleInput2">About Myself</label>
      <textarea col="50" rows="5" class="form-control" name="about" required> </textarea>
  </div>
   
    <button class="btn btn-success" type="submit">Create</button>
  



</form>
</div>
</div>



</body>
</html>
