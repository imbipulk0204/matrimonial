<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>

<?php

  if (isset($_POST["payment"])) {

       $user_id=$_SESSION['id'];
       $cupon=$_POST['payment'];

      $sql3 ="SELECT * FROM cupons WHERE cupons = $cupon ";
      // $result3=$conn->query($sql3);
        $result3 = $conn->query($sql3);
        if ($result3->num_rows == 1) {
          $row3=$result3->fetch_assoc();

        echo "valid cupons";

  }
  else {

        ?>

        <h1 align="center">invalid cupons</h1>

    <?php
  }
}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>cupons</h1>
  </body>
</html>
