<?php include_once("includes/basic_includes.php");?>
<?php require_once("includes/dbconn.php");?>
<?php include_once("functions.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>
 <?php



  $self_id=$_SESSION['id'];

  $sql="SELECT * from friend where  friend_id = $self_id";
  $result=$conn->query($sql);

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>friend_request</title>
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
    <style media="screen">
      body{
        background-color:;
      }
    </style>
  </head>
<?php  include('includes/navigation.php');   ?>
  <body >

    <h1 align="center">welcome to request queue</h1>
    <h1 style="padding:5%;" class="">
      ALL REQUESTS
      <hr class="line">
    </h1>
    <?php
    if ($result->num_rows > 0) {
    while ($row=mysqli_fetch_assoc($result)) {


   $sql2="SELECT * FROM users WHERE id='".$row['user_id']."' ";
   $result2=$conn->query($sql2);

  $row2=mysqli_fetch_assoc($result2);
?>

               <div style="border:2px solid blue;width:40%;font-family:;box-shadow: 10px 10px lightgreen ;" class="container">
                 <div class="center">
                   <label for="">friend request send by PROFILE ID:<?php echo $row2['id'] ?></label> <br>
                     <ul>

                       <li>
                         <form class="" action="user_view.php" method="post">
                           <input type="text" name="u_id" value="<?php echo $row2['id']; ?>" hidden>
                           <input type="submit" name="" value="<?php echo $row2['username']; ?>">
                         </form>


                         <input style="margin-left:400px" class="btn btn-success" type="submit" name="" value="confirm">
                       </li>
                       <br>
                        <li><?php if ($row2['gender']==0) {
                          echo "<B>FEMALE</B>";
                        } else {
                          echo "<B>MALE</B>";
                        } ;?><input style="margin-left:350px" class="btn btn-danger" type="submit" name="" value="cancel"></li>
                         <li><?php echo $row2['dateofbirth']; ?></li>
                          <li><?php echo $row2['id']; ?></li>

                     </ul>

                 </div>
               </div>
     <?php }} else{ ?>
       <h1 style="padding:5%;" class="">
         NO REQUESTS FOUND
         <hr class="line">
       </h1>
       <?php } ?>
  </body>
</html>
