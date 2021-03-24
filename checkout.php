<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

?>
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
<?php
$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id=$id ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$name = $row['username'];
?>
 <?php
if (isset($_POST['amount1'])) {

	$amount = $_POST['amount1'];
	 
} else {
echo "error";
}  
?>  
     

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">

<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
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


</head>
<body>
  <H1>PAY THROUGH PAYTM ONLY</H1>
   <div align="center" class="jumbotron col-md-12">
	   <div class="container">
	
<!--  -->

<div class="container">
  <h2>CHECK OUT</h2>
  <form style="width:70%;border:px solid blue" class="form-horizontal" method="post"action="payment/paytm/paytmKit/pgRedirect.php">

  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Id:</label>
      <div class="col-sm-10">          
	  <input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12"  autocomplete="off" value="<?php echo $id; ?>"disabled >
				
				<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $id; ?>" hidden >
			
      </div>
	</div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NAME:</label>
      <div class="col-sm-10">
	  <input style="width:" class="form-control" id="INDUSTRY_TYPE_ID" tabindex="1" maxlength="50" size="60"
						autocomplete="off"
						value="<?php echo $name; ?>"disabled >

						<input id="INDUSTRY_TYPE_ID" tabindex="1" maxlength="50" size="60"
						name="INDUSTRY_TYPE_ID" autocomplete="off"
						value="<?php echo $name; ?>" hidden >
      </div>
    </div>
    
	

	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ORDER NO:</label>
      <div class="col-sm-10">          
	  <input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						 autocomplete="off"
						value="<?php echo "ORDS" . rand(10000, 99999999) ?>" disabled>

						<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo "ORDS" . rand(10000, 99999999) ?>" hidden>
      </div>
	</div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">AMOUNT:</label>
      <div class="col-sm-10">          
	  <input class="form-control" title="TXN_AMOUNT" tabindex="10"
						type="text" 
						value="<?php echo $amount; ?>"disabled>

						
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>"hidden>
      </div>
	</div> <br>
	
	<!--  -->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	  <input class="btn btn-success" value="BUY" type="submit"	onclick="">
      </div>
    </div>
  </form>
</div>

<!--  -->


</div>
   </div>


   <!--  -->
   
<!--  -->
</body>
</html>