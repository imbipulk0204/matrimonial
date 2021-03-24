 <?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>
<?php 
if (isset($_POST['delete'])) {
    
    $user_id=$_POST['delete'];
   
    $sql="DELETE FROM users where id=$user_id";
    $result=$conn->query($sql);

    $sql1="DELETE FROM profle where cust_id=$user_id";
    $result1=$conn->query($sql1);
    session_unset();
       ?>
             <script>
             alert("deleted your account!");
             window.location="index.php";
             </script>
       <?php 
} else {
    ?>
          <script>
          alert("some problem occurs please try again later!");
          window.location="userhome.php";
          </script>
    <?php 
}




?>
