Andhra Pradesh	Hyderabad (De jure - 2 June 2024) Amaravati (proposed)
	Arunachal
	Assam	Bihar
Chhattisgarh
	Goa
  Gujarat
  Haryana
  Himachal Pradesh
	Jammu and Kashmir
	Jharkhand
	Karnataka
	Kerala
	Madhya Pradesh
	Maharashtra
	Manipur
	Meghalaya
	Mizoram
	Nagaland
	Odisha
	Punjab
	Rajasthan
	Sikkim
	Tamil Nadu
	Telangana
	Tripura
	Uttar Pradesh
	Uttarakhand
	West Bengal



  <!--  <div class="form_but1">
      <label class="col-sm-5 control-lable1" for="District / City">District / City : </label>
      <div class="col-sm-7 form_radios">
        <div class="select-block1">
          <select name="district">
              <option value=""> City</option>
              <option value="Delhi">Delhi</option>
              <option value="kolkata">kolkata</option>
              <option value="mumbai">Mumbai</option>
              <option value="Trivandrum">Trivandrum</option>
              <option value="Kanpur">Kanpur</option>
              <option value="guwahati">Guwahati</option>
          </select>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>  -->












   <!-- view recent profile -->


   <?php /*
$sql="SELECT * FROM customer ORDER BY profilecreationdate ASC";
$result=mysqlexec($sql);
$count=1;
while($row=mysqli_fetch_assoc($result)){
$profid=$row['cust_id'];
//getting photo
$sql="SELECT * FROM photos WHERE cust_id=$profid";
$result2=mysqlexec($sql);
$photo=mysqli_fetch_assoc($result2);
$pic=$photo['pic1'];
echo "<ul class=\"profile_item\">";
echo"<a href=\"view_profile.php?id={$profid}\">";
echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
echo "<li class=\"profile_item-desc\">";
echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
echo "<h5>" . "View Full Profile" . "</h5>";
echo "</li>";
echo "</a>";
echo "</ul>";
$count++;
}
 */?>



















<?php
// if ($_GET && isset($_GET['id']){

//     if(isset($_SESSION['user_id']){
//        $profile_user_id = $_GET['id'];

//        // the user that visits the profile has a session with his/her id on it.
//        session_start();
//        $visitor_user_id = $_SESSION['user_id'];
//     } else {
//        // if visitor specified an id but there is no session, redirect to login.
//        header("location: login.php");
//     }
// } else {
//     // if no id passed redirect to index
//     header("location: index.php");
// }
?>


<!-- 
<html>
<head>
<title>Your title</title>
</head>
<script src="scripts/jquery.js" type="text/javascript"></script>
<script type="text/javascript"> -->
//here you will store the visit with jquery.
$(document).ready(function(){
  // store the values from php.
  var profile_user_id = <?php echo $profile_user_id ?>;
  var visitor_user_id = <?php echo $visitor_user_id ?>;

  // here, the user information goes to the visit.php file.
  $.post('visit.php' { profile_user_id:profile_user_id, visitor_user_id:visitor_user_id } );
});
<!-- </script>
<body>
Here print user information from a SQL select or something of the id passed in the GET.
</body>
</html> -->






  visit.php
<!-- <?php
// if ($_POST && isset($_POST['profile_user_id']) && isset($_POST['visitor_user_id'])) {

//     session_start();

//     // this will end the execution of the script if there is no session from user logged
//     if ($_SESSION['user_logged'] != true) {
//       exit();
//     }

//     // everything is ok, do the process:
//     // functions.php contains your SQL connection, I suppose you know how to do it.
//     include('../cgi-bin/functions.php');
//     $link = dbconn();

//     $profile_user_id = mysql_real_escape_string($_POST['profile_user_id']);
//     $visitor_user_id = mysql_real_escape_string($_POST['visitor_user_id']);

//     // this will store the data in profileview including date and time if id's are not equal.
//     if($profile_user_id != $visitor_user_id){
//        $sql = "INSERT INTO profileview (user_id, visitor_user_id, date_time) VALUES ($profile_user_id, $visitor_user_id, NOW())";
//        mysql_query($sql, $link);
//      }




//only start display profiles if and only if search is triggered
/*  if(isset($_POST['search'])){

//code to print matching profiles

// // couloumn count

   $c_count = '1';

 while ($row = mysqli_fetch_assoc($result))
 {
     //getting photo for display
     $u_id=$row['cust_id'];
     $sql="SELECT * FROM photos WHERE cust_id=$u_id";
     $result2=mysqlexec($sql);
    $photo=mysqli_fetch_assoc($result2);
     $pic=$photo['pic1'];
  // printing left side profile

  if ($c_count == '1')
    {

   echo "<div class=\"row_1\">"; //starting row
     echo "<div class=\"col-sm-6 paid_people-left\">"; //left statrted
    echo "<ul class=\"profile_item\">";
    echo "<a href=\"user_view.php?id=$u_id\">";
    echo "<li class=\"profile_item-img\"><img src=\"profile/". $u_id."/".$pic ."\"" . "class=\"img-responsive\"" ;
    echo "alt=\"\"/></li>";
    echo "<li class=\"profile_item-desc\">";
    echo "<h4>" . $row['height'] . " " . $row['education'] . "</h4>";
     echo "<p>" . $row['religion']. "Yrs," . $row['caste'] . "</p>";
     echo "<h5>" . "View Full Profile" . "</h5>";
     echo "</li>";
     echo "</a>";
     echo "</ul>";
     echo "</div>"; //left end
     $c_count++;
     }
    else
    {
     echo "<div class=\"col-sm-6\">"; //right statrted

    echo "</div>"; //right end

    // end of right side


     $c_count = '1';
    }
     } //loop end
  echo "</div>"; //row end
}//end of if              */



/*
$result=mysqlexec($sql);
$count=1;
while($row=mysqli_fetch_assoc($result)){
$profid=$row['cust_id'];
//getting photo
$sql="SELECT * FROM photos WHERE cust_id=$profid";
$result2=mysqlexec($sql);
$photo=mysqli_fetch_assoc($result2);
$pic=$photo['pic1'];
echo "<ul class=\"profile_item\">";
echo"<a href=\"view_profile.php?id={$profid}\">";
echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
echo "<li class=\"profile_item-desc\">";
echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
echo "<h5>" . "View Full Profile" . "</h5>";
echo "</li>";
echo "</a>";
echo "</ul>";
$count++;
} */