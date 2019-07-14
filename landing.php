<?php 
	include('functions.php');
	include('db.php');
	include('header.php');

	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
    }
?>

<body>
	<div id="navi">
	<div class="row">
		<ul class="nav">
		<a id="navlogo" href="index.php"><img src="img/Logo.png" height="80px" width="100px"></a>
		</ul>
		<ul class="nav">
	  <li id="media" class="nav-item">
	    <a href="landing.php"><h5>Recipes</h5></a>
	  </li>
	  <li id="media" class="nav-item">
	    <a href=""><h5>About Us</h5></a>
	  </li>
	  <li id="media" class="nav-item">
	   <a href="login.php"><h5>Sign In</h5></a>
	  </li>
	</ul>	
	</div>
</div>

<div id="content3">
		<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
<h3>
<?php 
	echo $_SESSION['success']; 
	unset($_SESSION['success']);
					?>
</h3>
</div>
<?php endif ?>

<!-- logged in user information -->
<div class="profile_info">
<img src="images/user_profile.png"  >

<div>
	<?php  if (isset($_SESSION['user'])) : ?>
		<strong id="user"><?php echo $_SESSION['user']['username']; ?></strong>

		<small>
			<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
			<br>
			<a href="index.php?logout='1'"><h6>Logout</h6></a>
		</small>

	<?php endif ?>


</div>
</div>
</div>
		<!-- Recipe -->
	<?php $results = mysqli_query($db, "SELECT * FROM images"); ?>
	<div id="imgcon" class="container" >
		<?php
	    while ($row = mysqli_fetch_array($result)) {
		echo "<div class='card'>";
		 echo "<img src='admin/images/".$row['image']. "' height='400'>";
		  echo "<button  class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
		    Learn More
		  </button>";
		  echo "<div class='collapse' id='collapseExample'>";
		  echo "<div class='card card-body'>";
		    echo "<p1>".$row['image_text']."</p1>";
		 echo "</div>";
		 echo "</div>";
		echo "</div>";
	     } 
		 ?>	  
   </div>
 <!-- Recipe -->  


<div id="jumbotron2" class="jumbotron jumbotron-fluid col-lg-12 col-sm-12 ml-0 mb-0 mt-5">
	  <?php include('comment.php') ?>
</div>

 <!-- Footer -->
<div id="jumbotron" class="jumbotron jumbotron-fluid col-lg-12 ml-0 mb-0 mt-5">
	  <?php include('footer.php'); ?>
</div>
<!-- footer -->
</body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>