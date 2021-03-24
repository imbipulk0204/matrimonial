<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}
// if (isset($_POST['amount1'])) {
//   $amount=$_POST['amount1'];

// $sqla="SELECT * FROM cupons WHERE rupees=$amount AND status=0 ";
// $resulta = $conn->query($sqla);
// $rowa = $result->fetch_assoc();

// } else {
//><script>

// window.location="payment.php";
// </script>
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>purchase</title>

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
    <!--font-Awesome-->

    <style>
    /* #blur{
	font-size: 40px;
	color: transparent;
	text-shadow: 0 0 18px #000;
} */
    </style>
</head>
<?php include "includes/navigation.php"?>
<body>
     <!-- <div style="margin-top:50px;border:3px solid blue;width:50%;height:auto" class="container right">
       <h1>purchase cupon via paytm</h1>
         <form style="margin-top:30px;padding-left:30px" action="checkout.php" method="post">

           <button class="btn btn-danger" type="submit" name="amount1" value="100"  >100 rs cupon</button> <br> <br>
           <button class="btn btn-danger" type="submit" name="amount1" value="500"  >500 rs cupon</button> <br> <br>
           <button class="btn btn-danger" type="submit" name="amount1" value="1000"  >1000 rs cupon</button> <br> <br>
           <button class="btn btn-danger" type="submit" name="amount1" value="2000"  >2000 rs cupon</button> <br> <br>


         </form>
       </div> -->
       <form style="margin-top:30px;padding-left:30px" action="checkout.php" method="post">

       <div class="jumbotron ">
         <div class="container">
<div   class="row">
  <div  class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:100</p>
        <!-- <p class="card-text">@Rs:80</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="100">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div  class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:300</p>
        <!-- <p class="card-text">@Rs:270</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="300">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div  class="card">
      <div class="card-body">
        <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:500</p>
        <!-- <p class="card-text">@Rs:450</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="500">buy</button>
      </div>
    </div>
  </div>



</div>
</div>

</div>

<!--  -->
<div class="jumbotron ">
         <div class="container">
<div  class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:1000</p>
        <!-- <p class="card-text">@Rs:900</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="1000">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:1500</p>
        <!-- <p class="card-text">@Rs:1350</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="1500">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:2000</p>
        <!-- <p class="card-text">@Rs:1800</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="2000">buy</button>
      </div>
    </div>
  </div>





</div>
</div>

</div>
<!--  -->
<div class="jumbotron ">
         <div class="container">
<div  class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:2500</p>
        <!-- <p class="card-text">@Rs:2300</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="2500">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:3000</p>
        <!-- <p class="card-text">@Rs:2700</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="3000">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special offer </h5>
        <p class="card-text">Buy Cupon Rs:5000</p>
        <!-- <p class="card-text">@Rs:4500</p> -->
        <button class="btn btn-success" type="submit" name="amount1" value="5000">buy</button>
      </div>
    </div>
  </div>





</div>
</div>

</div>
</form>
</body>
</html>
