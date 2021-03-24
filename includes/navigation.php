<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
				  <?php
if (isloggedin()) {
    $id = $_SESSION['id'];
          ?>      <li><a href="userhome.php?id=$id"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a></li> <?php   
} else {
  ?>     <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
    <li><a href="register.php"><i class="fa fa-registered" aria-hidden="true"></i> register
</a></li>  <?php
}

?>

				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a style="color:white;font-size:32px;font-family:cursive; " class="brand" href="index.php"> <B>SOUL-MATE.COM</B></a>   <!-- <img src="images/logo.png" alt="logo">   -->
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">

		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div>
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
					<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
				<?php 	if (isloggedin()) {
				 $id = $_SESSION['id'];
				
				
          ?>  
					<li><a href="messages/chat.php"><i class="far fa-comment-dots" aria-hidden="true"></i>Chat
				
				</a></li>
					<?php   
				 
				
				}
				 else{

				}
					?> 
		            <li><a href="about.php">About</a></li>

					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>
Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Search By Details</a></li>
						<li><a href="search-id.php">Search By Profile ID</a></li>
						<li><a href="search_by_name.php">Search By name</a></li>
		                <li><a href="faq.php">Faq</a></li>

		              </ul>
		            </li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
