
<?php
include_once "../includes/dbconn.php";
session_start();
if (isset($_SESSION["login"])) {
    header('Location:pro.php');
} elseif (isset($_COOKIE["cookie_auth"])) {

    $cookie_auth = $_COOKIE["cookie_auth"];
    $sql_cookie = "Select * from users where api_token = '$cookie_auth'";
    $rec_cookie = $conn->query($sql_cookie);
    $count = $rec_cookie->num_rows;
    if ($count == 1) {

        $field = $rec_cookie->fetch_assoc();

        $_SESSION['userid'] = $field['uid'];
        $_SESSION['fname'] = $field['fname'];
        $_SESSION['lname'] = $field['lname'];
        $_SESSION['email'] = $field['email'];
        $_SESSION['phone'] = $field['phone'];
        $_SESSION['gender'] = $field['gender'];
        $_SESSION['dob'] = $field['dob'];
        $_SESSION['password'] = $field['password'];
        $_SESSION['pro'] = $field['pro_pic'];

        $_SESSION["login"] = true;
        $uid = $field['uid'];
        $sql = "UPDATE users SET api_token = '$token' where uid =$uid";
        $conn->query($sql);

        //echo $conn->error;
        //die();
        $_SESSION['api_token'] = $token;
        if (isset($_COOKIE['cookie_auth'])) {
            $_COOKIE['cookie_auth'] = $token;
        } else {
            setcookie("cookie_auth", $token, time() + (86400 * 30), "/");
        }

        header('Location:pro.php');

    }
}
include_once "head.php";
?>
<body class='log'>
    <?php
if (!isset($_POST["login"])) {
    require "navbar.php";
}
?>
    <main>
    <div  class= "leftpart"><span class=" text-danger pt-5"><i class="fab fa-magento"></i>Meet</span><span class="text-light pt-5">Hub</span></div>
    <div class="card main-form   ml-auto m-5 bg-dark">

                    <div class="card-header bg-dark text-white py-2
                 ">
                        <h1 class="lead">
                        <b class="text-danger">Login</b> here
                        </h1>
                    </div>
                    <div class="card-body size pt-1">
                        <?php
if (isset($_SESSION["error"])) {
    ?>
                                <div class="alert alert-danger">
                                <?php echo $_SESSION["error"]; ?>
                                </div>

                            <?php
unset($_SESSION["error"]);
}
?>
                            <form action="" method="post" class="" >
                                <small class="  w-25 mx-auto " >
                                    <span class="text-danger "><i class="fab fa-magento"></i>Meet</span><span class="text-white">Hub</span>
                                </small>
                                <div class="text-white pt-4">E-mail</div>
                                <div class="">
                                    <input name="email" type="text" class="form-control w-100 " id="email"placeholder=Email>
                                </div>


                                <div class="text-white">Password</div>
                                <div class="">
                                    <input name="password" type="password" class="form-control w-100" id="password"placeholder=Password>
                                </div>
                                <div class=" ">
                                    <input type="submit" name="login" value="Login" class="btn btn-danger w-25 d-inline-block mt-4 " >
                                    <a href="signup.php" class="btn btn-secondary w-25 d-inline-block mt-4" >Signup</a>
                                </div>
                                <a href="forgot.php">Forgot password?</a>
                            </form>
                    </div>
                    <div class="card-footer bg-dark text-secondary py-0 text-center">
            <small>&copy;All Reserved to Shivam</small>
         </div>

    </main>

</body>

<?php
if (isset($_POST['login'])) {
    $sqlselect = "SELECT * FROM users
        WHERE email='$_POST[email]' and password='$_POST[password]'";
    $rec = $conn->query($sqlselect);
    $count = $rec->num_rows;
    $token = md5(rand());
    //die($token);

    if ($count == 1) {

        $field = $rec->fetch_assoc();

        $_SESSION['userid'] = $field['uid'];
        $_SESSION['fname'] = $field['fname'];
        $_SESSION['lname'] = $field['lname'];
        $_SESSION['email'] = $field['email'];
        $_SESSION['phone'] = $field['phone'];
        $_SESSION['gender'] = $field['gender'];
        $_SESSION['dob'] = $field['dob'];
        $_SESSION['password'] = $field['password'];
        $_SESSION['pro'] = $field['pro_pic'];

        $_SESSION["login"] = true;
        $uid = $field['uid'];
        $sql = "UPDATE users SET api_token = '$token' where uid =$uid";
        $conn->query($sql);

        //echo $conn->error;
        //die();
        $_SESSION['api_token'] = $token;
        if (isset($_COOKIE['cookie_auth'])) {
            $_COOKIE['cookie_auth'] = $token;
        } else {
            setcookie("cookie_auth", $token, time() + (86400 * 30), "/");
        }

        header('Location:pro.php');

    } else {
        $_SESSION["error"] = "invalid credentials";
        header('Location:login.php');

    }

}

?>
<?php include "footer1.php";?>

