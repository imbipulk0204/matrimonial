<?php include_once "../includes/basic_includes.php";?>
<?php include_once "../functions.php";?>
<?php
if (!isloggedin()) {
    header("location:login.php");
}
include "../includes/dbconn.php";
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
    <title>premium member</title>
    <style>
    body{



    }


    }
    .card{
        width:50%;
        height:30vh;
        padding-top: 20px;
        padding-left:30px;
        margin-left:50px;
    }
    .lg{
        width:20%;
        height:30vh;
        margin-left:150px;
        margin-top:120px;

    }
    .card-body{
        padding-top: 20px;
        padding-left:30px;
        padding-bottom: 15px;
        padding-right: 35px;
    }
    </style>
</head>
<body>
    <?php include "../includes/mem_navigation.php";?>

         <?php

$sql = "select * from premium_members where user_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $row['user_id'];
$d = date('Y-m-d');
$issue_date = $row['issue_date'];
$duration = $row['duration'];

$today = date('Y-m-d');

$datetime1 = strtotime(date('Y-m-d', strtotime($issue_date)));
$datetime2 = strtotime(date('Y-m-d', strtotime($today)));

$secs = $datetime2 - $datetime1; // == <seconds between the two times>
$days = $secs / 86400;
//echo $days;
if ($d < $issue_date) {
    echo "hello";
}

?>


        <form action="checkout.php" method="post">
<div   class="row">
  <div  class="col-sm-4 lg">
    <div style="border:1px solid black" class="card">
      <div class="card-body">
      <h2 class="card-title">One month </h2>
                     <h2>membership</h2>
        <p class="card-text">@500</p> <br>
        <!-- <p class="card-text">@Rs:80</p> -->
        <button class="btn btn-primary form-control" type="submit" name="amount1" value="500">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-4 lg">
    <div style="border:1px solid black" class="card">
      <div class="card-body">
      <h2 class="card-title">Two month </h2>
                     <h2>membership</h2>
        <p class="card-text">@800</p> <br>
        <!-- <p class="card-text">@Rs:270</p> -->
        <button class="btn btn-danger form-control" type="submit" name="amount1" value="800">buy</button>
      </div>
    </div>
  </div>

  <div class="col-sm-3 lg">
    <div style="border:1px solid black" class="card">
      <div  class="card-body">
      <h2 class="card-title">Three month </h2>
                     <h2>membership</h2>
        <p class="card-text">@1000</p> <br>
        <!-- <p class="card-text">@Rs:270</p> -->
        <button class="btn btn-success form-control" type="submit" name="amount1" value="1000">buy</button>
      </div>
    </div>
  </div>

</div>

</form>

</body>
</html>
