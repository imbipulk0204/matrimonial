<?php
function mysqlexec($sql)
{
    $host = "localhost"; // Host name
    $username = "matrimonial"; // Mysql username
    $password = "matrimonial020497@"; // Mysql password
    $db_name = "matrimonial"; // Database name

// Connect to server and select databse.
    $conn = mysqli_connect($host, $username, $password) or die("cannot connect");

    mysqli_select_db($conn, $db_name) or die("cannot select DB");

    if ($result = mysqli_query($conn, $sql)) {
        return $result;
    } else {
        echo mysqli_error($conn);
    }
}
function searchid()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $u_id = $_POST['u_id'];
        $sql = "SELECT * FROM profle WHERE cust_id=$u_id";
        $result = mysqlexec($sql);
        return $result;
    }
}

function search()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $maritialstatus = $_POST['maritalstatus'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $religion = $_POST['religion'];
        $mothertounge = $_POST['mothertounge'];
        //  $gender = $_POST['sex'];            sex='$sex'

        $sql = "SELECT * FROM profle WHERE  maritialstatus = '$maritialstatus'	AND country = '$country'	AND state = '$state'AND religion = '$religion'	AND mothertounge = '$mothertounge'
	";
        $result = mysqlexec($sql);
        return $result;

    }
}
function writepartnerprefs($id)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $agemin = $_POST['agemin'];
        $agemax = $_POST['agemax'];
        $maritalstatus = $_POST['maritalstatus'];
        $complexion = $_POST['colour'];
        $height = $_POST['height'];
        $diet = $_POST['diet'];
        $religion = $_POST['religion'];
        $caste = $_POST['caste'];
        $mothertounge = $_POST['mothertounge'];
        $education = $_POST['education'];
        $occupation = $_POST['occupation'];
        $country = $_POST['country'];
        $descr = $_POST['descr'];

        $sql = "UPDATE
				   partnerprefs
				SET
				   agemin = '$agemin',
				   agemax='$agemax',
				   maritalstatus = '$maritalstatus',
				   complexion = '$complexion',
				   height = '$height',
				   diet = '$diet',
				   religion='$religion',
				   caste = '$caste',
				   mothertounge = '$mothertounge',
				   education='$education',
				   descr = '$descr',
				   occupation = '$occupation',
				   country = '$country'
				WHERE
				   custId = '$id'";

        $result = mysqlexec($sql);
        if ($result) {
            echo "<script>alert(\"Successfully updated Partner Preference\")</script>";
            echo "<script> window.location=\"userhome.php?id=$id\"</script>";

        } else {
            echo "Error";
        }

    }
}

function register()
{
    if (isset($_POST['op'])) {
        $uname = $_POST['name'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        // $day = $_POST['day'];
        // $month = $_POST['month'];
        // $year = $_POST['year'];
        // $day = $_POST['day'];
        // $month = $_POST['month'];
        // $year = $_POST['year'];
        // $dob = $year . "-" . $month . "-" . $day;

        // $diff = (date('Y') - date('Y', strtotime($dob)));

        $gender = $_POST['gender'];
        require_once "includes/dbconn.php";

        $sqlc = "SELECT * FROM users WHERE email='$email'";
        $resultc = $conn->query($sqlc);
        $rowc = $resultc->fetch_assoc();

        if ($rowc == 0) {
            echo $uname;
            echo $pass;
            echo $email;
            echo $age;

            $sql1 = " INSERT INTO users ( username, password, email, dateofbirth, gender) VALUES ('$uname', '$pass', '$email', $age, $gender) ";
            $resultq = $conn->query($sql1);

            header("location:login.php");
        } else {

            ?>
    <script>
   alert("email already exits");
  window.location="register.php";
   </script>

<?php

        }
        //    } if (mysqli_query($conn, $sql)) {
        //         echo $conn->insert_id;
        //         echo "<script>alert(\"Successfully Updated Profile\")</script>";
        //         // header("location:login.php"); $sql . "<br>" . $conn->error;

    } else {

    }
}
function isloggedin()
{
    if (!isset($_SESSION['id'])) {
        return false;
    } else {
        return true;
    }

}

function processprofile_form($id)
{

    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $maritialstatus = $_POST['maritialstatus'];
    $profilecreatedby = $_POST['profilecreatedby'];
    $education = $_POST['education'];
    $bodytype = $_POST['bodytype'];
    $physicalstatus = $_POST['physicalstatus'];
    $drink = $_POST['drink'];
    $smoke = $_POST['smoke'];
    $mothertounge = $_POST['mothertounge'];
    $bloodgroup = $_POST['bloodgroup'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $color = $_POST['colour'];
    $diet = $_POST['diet'];
    $occupation = $_POST['occupation'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $motheroccupation = $_POST['motheroccupation'];
    $annualincome = $_POST['income'];
    $noofbros = $_POST['bros'];
    $noofsis = $_POST['sis'];
    $about = $_POST['aboutme'];

    require_once "includes/dbconn.php";
    $sql = "SELECT cust_id FROM profle WHERE cust_id=$id";
    $result = mysqlexec($sql);

    if (mysqli_num_rows($result) >= 1) {
        //there is already a profile in this table for loggedin customer
        //update the data
        $sql = "UPDATE
   			profle
		SET

			 height = '$height',
		   religion = '$religion',
		   caste = '$caste',
		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritialstatus = '$maritialstatus',
		   profilecreatedby = '$profilecreatedby',
		   education  = '$education',
		   bodytype = '$bodytype',
		   physicalstatus = '$physicalstatus',
		   drink =  '$drink',
		   mothertounge = '$mothertounge',
		   color = '$color',
		   weight = '$weight',
			 bloodgroup = '$bloodgroup',
			 diet = '$diet',
		   smoke = '$smoke',
		   occupation = '$occupation',
		    annualincome = '$annualincome',
		   fatheroccupation = '$fatheroccupation',
		   motheroccupation = '$motheroccupation',
		   noofbros = '$noofbros',
		   noofsis = '$noofsis',
		   about = '$about'
		WHERE cust_id=$id; "
        ;
        $result = mysqlexec($sql);
        if ($result) {
            echo "<script>alert(\"Successfully Updated Profile\")</script>";
            echo "<script> window.location=\"userhome.php?id=$id\"</script>";

        }
    } else {
        //Insert the data
        $sql = " INSERT INTO `profle`(`cust_id`, `height`, `religion`, `caste`, `district`, `state`, `country`, `maritialstatus`, `profilecreatedby`, `education`, `bodytype`, `physicalstatus`, `drink`, `mothertounge`, `color`, `weight`, `bloodgroup`, `diet`, `smoke`, `occupation`, `annualincome`, `fatheroccupation`, `motheroccupation`, `noofbros`, `noofsis`, `about`, `profilecreationdate`)
		  VALUES ('$id','$height','$religion','$caste','$district','$state','$country','$maritialstatus','$profilecreatedby','$education','$bodytype','$physicalstatus','$drink','$mothertounge','$color','$weight','$bloodgroup','$diet','$smoke','$occupation','$annualincome','$fatheroccupation','$motheroccupation','$noofbros','$noofsis','$about',CURDATE()) ";
         
        if (mysqli_query($conn, $sql)) {

            echo "<script>alert(\"Successfully Created Profile\")</script>";
            echo "<script> window.location=\"userhome.php?id=$id\"</script>";

            //creating a slot for partner prefernce table for prefs details with cust id
            $sql2 = "INSERT INTO partnerprefs (id, custId) VALUES('', '$id')";
            mysqli_query($conn, $sql2);
            $sql2 = "UPDATE TABLE users SET profilestat=1 WHERE id=$id";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}

//function for upload photo
//function for upload photo

function uploadphoto($id)
{
    $target = "profile/" . $id . "/";
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }
//specifying target for each file
    $target1 = $target . basename($_FILES['pic1']['name']);
    $target2 = $target . basename($_FILES['pic2']['name']);
    $target3 = $target . basename($_FILES['pic3']['name']);
    $target4 = $target . basename($_FILES['pic4']['name']);

// This gets all the other information from the form
    $pic1 = ($_FILES['pic1']['name']);
    $pic2 = ($_FILES['pic2']['name']);
    $pic3 = ($_FILES['pic3']['name']);
    $pic4 = ($_FILES['pic4']['name']);

    $sql = "SELECT id FROM photos WHERE cust_id = '$id'";
    $result = mysqlexec($sql);

//code part to check weather a photo already exists
    if (mysqli_num_rows($result) == 0) {
        // no photo for curret user, do stuff...
        $sql = "INSERT INTO photos (id, cust_id, pic1, pic2, pic3, pic4) VALUES ('', '$id', '$pic1' ,'$pic2', '$pic3','$pic4')";
        // Writes the information to the database
        mysqlexec($sql);

    } else {
        // There is a photo for customer so up
        $sql = "UPDATE photos SET pic1 = '$pic1', pic2 = '$pic2', pic3 = '$pic3', pic4 = '$pic4' WHERE cust_id=$id";
        // Writes the information to the database
        mysqlexec($sql);
    }

// Writes the photo to the server
    if (move_uploaded_file($_FILES['pic1']['tmp_name'], $target1) && move_uploaded_file($_FILES['pic2']['tmp_name'], $target2) && move_uploaded_file($_FILES['pic3']['tmp_name'], $target3) && move_uploaded_file($_FILES['pic4']['tmp_name'], $target4)) {
        ?>

    <script>
    alert("file upload successfully");
    </script>

<?php
// Tells you if its all ok

    } else {
        ?>

    <script>
    alert("some error occur");
    </script>

<?php
}

} //end uploadphoto function
//end uploadphoto function

////contact form start//

function contact()
{
    $id = $_SESSION['id'];
    $user_id = $id;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone_no = $_POST['no'];
        $email = $_POST['email'];
        $messages = $_POST['messages'];
        require_once "includes/dbconn.php";

        $sql5 = " INSERT INTO `contact`( `user_id`, `name`, `no`, `email`, `messages`)
		           VALUES ('$user_id','$name','$phone_no','$email','$messages') ";

        if (mysqli_query($conn, $sql5)) {

            echo "<script>alert(\"We will contact you soon!\")</script>";
            echo "<script> window.location=\"index.php?id=$id\"</script>";

        } else {
            echo "Error: " . $sql5 . "<br>" . $conn->error;
        }
    }
}
/* function s(){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$user_id=$_POST['user_id'];
$sql="SELECT * FROM profle WHERE cust_id=$user_id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);
}
}
 */
?>