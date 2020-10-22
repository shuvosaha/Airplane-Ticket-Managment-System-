<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home_css.css">
</head>
<body>
 <div class="box">
 
 
 <div class="header">
	<h2>Home Page</h2><hr>
</div>



	<div class="content">
  	<!--  message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h2>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h2>
      </div>
	 
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
    	
    <?php endif ?>
</div>
<p>Choose your menu</p><br>
<ul>
  <li> <a href="About.html"> About</a></li>
  <li> <a href="flight.html"> Flight</a></li>
  
</ul>
<br><br>

<p> <a href="index.php?logout='1'" style="color: white;">logout</a> </p>
	
	</div>
</body>
</html>