
<?php include_once "../admin.auth/auth.php";?>

<?php require_once "../includes/dbconn.php";?>
<?php include_once "../functions.php";?>

    <?php

if (isset($_POST['delete'])) {

    $id = $_POST['delete'];
    $sqld = "DELETE FROM cupons WHERE id=$id ";
    $delete = $conn->query($sqld);

    # code...
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
    <link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!--font-Awesome-->
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>


<?php include "../includes/navigation2.php";?>
  <body>



          <div class="container">
          <div class=" p-5 ">
        <h1 class="text-">All Cupons</h1>
        <hr class="bg-dark pt-1 w-75 ml-0">
        <div class="list-group">

            <div class="list-group-item">
                    <div class="row m-0">
                        <?php

$sql = "select  id, cupons, rupees, status, valid_status from cupons ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - cupon No: " . $row["cupons"]. " " . $row["rupees"]. "<br>";
        //$c = $row['cupons'];

        ?>
                        <form action="" method="post">
                        <div style="" class="inline">
                           <h4  class="col-md-2"> id: <?php echo $row["id"] ?> </h4>
                           <h4 style="border:px solid blue;margin-left:-60px" class="col-md-2 lead">Cupon:<?php echo "<small style=\" color:red;\">" . $row["cupons"] . "</small>"; ?> </h4>
                           <h4 style="border:px solid green;margin-left:50px" class="col-md-2"> rupees:<?php echo $row["rupees"] ?> </h4>
                           <h4  class="col-md-2"> status:<?php echo $row["status"] ?> </h4>
                           <h4  class="col-md-2"> valid_status:<?php echo $row["valid_status"] ?> </h4>
                        <?php if ($row['status'] == 1 && $row['valid_status'] == 1) {
            ?>
                <button class="btn btn-danger col-md-2" type="submit" name="delete" value="<?php echo $row['id']; ?>" >delete cupon</button>
 <?php
} else {
            ?>
                            <button class="btn btn-success col-md-2" type="" name="" value="" >Valid cupon</button>
             <?php
}?>

                    <hr>
                    <br>
                    </div>
                    <form>
                <?php }
} else {
    echo "0 results";
}
$conn->close();
?>

                    </div>
            </div>



        </div>
    </div>
        </div>
<?php

?>

  </body>
</html>
