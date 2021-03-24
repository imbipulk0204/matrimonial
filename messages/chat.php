
<?php include_once "../includes/basic_includes.php";?>
<?php include_once "../functions.php";?>
<?php require_once "../includes/dbconn.php";?>
<?php

if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}

//  include_once("head.php");
//  include_once("navbar.php");
//  include_once("new.php");
?>

<body>
    
    <?php
$self_id = $_SESSION['id'];
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $user_result = $conn->query("select * from users where id = $id");
    $user_row = $user_result->fetch_assoc();
    $partner_name = $user_row['username'];
   
    $api_token = $_SESSION['api_token'];
} else {
    $id = "false";
}
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="chat.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   <script>
        var myid = <?php echo $_SESSION["id"]; ?>;
        var partnerid=<?php echo $id; ?>;
        var api_token = "<?php echo $api_token; ?>"//taking php data in javascript
    </script>

    <script src="chat.js"></script>
        <a href="../view_profile.php?id">go to home page</a>
    <div style="margin-left:120px; margin-bottom:50px" class="row page">
        <div style="border:px solid black;background-color:" class="col-md-3">
       
        <!-- all users -->
            <div class="list-group">
                <div style="border:px solid black;background-color:DodgerBlue" class="list-group-item  text-danger">
                     <span class="text-white">All Friends</span>
                </div>
                <?php 
               $chater_sql="select m.sender_id as sid, m.receiver_id as rid , receiver.username as rname, sender.username as sname 
                 from message m join users sender on sender.id = m.sender_id
                 join users receiver on receiver.id = m.receiver_id
                 where sender_id = $self_id or receiver_id = $self_id GROUP BY receiver_id";
                $chater_result = $conn->query($chater_sql);
                $dublicate = [];
                while($chater_row = $chater_result->fetch_assoc()){
                    extract($chater_row);
                    if ($self_id ==  $sid) {
                        if (in_array($rid,$dublicate)) {
                            continue;
                        }
                        array_push($dublicate,$rid);

                        ?> 
                        <a style="padding-left:15px;font-size:20px;padding-top:15px;color:black;font-size:25px" href="chat.php?id=<?php echo $rid;?>"><?php echo $rname;?></a> 
                    <?php
                    } else{
                        if (in_array($sid,$dublicate)) {
                            continue;
                        }
                        array_push($dublicate,$sid);
                        ?>  
                        <a style="padding-left:15px;padding-top:15px;font-size:25px;color:" href="chat.php?id=<?php echo $sid;?>"><?php echo $sname;?></a> 
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- Main message element The whole box -->
        <div  class="col-md-5" id="chat-element">
             <div class="card bg-dark">
             <!-- partner info -->
                <div style="background-color:DodgerBlue" class="card-header ">
                    <span class="">
                   <h5 style="color:white">Message <?php //echo $partner_name;?></h5>
                    </span>
                </div>
            <!-- chat box -->
                <div style="background-color:white" class="card-body " id="msgContainer">

                </div>
            <!-- Send message -->
                <div style="background-color:DodgerBlue" class="card-footer">
                    <div class="input-group mb-3">
                        <input type="text" id="myMsg" class="form-control" placeholder="Type Message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button onclick="sendMessage()" style="color:Black" class="btn btn-warning" id="basic-addon2">send <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</body>