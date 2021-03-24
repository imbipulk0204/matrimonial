<!DOCTYPE html>
<?php include_once 'includes/dbconn.php';?>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>

<h1 align="center">your cupons</h1>



          <?php if (isset($_SESSION["cupon_id"])) {

    $user_id = $_SESSION['id'];
    echo $_SESSION["cupon_id"];
    $cupon = $_SESSION['cupon_id'];

    echo "<br>" . $user_id;

    $sql = " UPDATE cupons set status = 1  where cupons = '$cupon' ";
    $result = $conn->query($sql);
    //insert cupon number into user_cupon

   $sqli="INSERT INTO user_cupons (user_id,cupon_no,valid_status) VALUES($user_id,'$cupon',1) ";
   $resulti=$conn->query($sqli);

}
// unset($_SESSION["cupon_id"]);
?>


</body>
</html>
