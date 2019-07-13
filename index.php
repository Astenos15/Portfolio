<?php 
	include('functions.php');
	include('db.php');
	include('header2.php');

	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
    }
?>

<body>
<!-- Recipe -->
	<?php $results = mysqli_query($db, "SELECT * FROM images"); ?>
	<div class="container justify-content-center" >
		<?php
	    while ($row = mysqli_fetch_array($result)) {
		echo "<div class='card'>";
		 echo "<img src='admin/images/".$row['image']. "' >";
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
    
 <!-- comment -->
  <div id="comments">
  	<?php include('comment.php') ?>
  </div>
 <!-- comment -->

   <!-- footer -->
   <div class="jumbotron jumbotron-fluid col-lg-12 ml-0 mb-0 mt-0">
	  <footer id="footer">
		<ul class="nav justify-content-center">
		<ul class="nav">
			<a href="landing.php"><img id="footlogo" src="img/Logo.png" height="150px" width="150px"></a>
			</ul>
		  <li id="media" class="nav-item">
		    <a href=""><i id="foot" class="fab fa-instagram fa-2x"></i></a>
		  </li>
		  <li id="media" class="nav-item">
		    <a href=""><i id="foot" class="fab fa-facebook-square fa-2x"></i></a>
		  </li>
		  <li id="media" class="nav-item">
		   <a href=""> <i id="foot" class="fab fa-twitter fa-2x"></i></a>
		  </li>
		  <li id="logo" class="nav-item">
		    <a><h5 id="a2">Copyright Fian Steaks Treat</h5></a>
		  </li>
		</ul>
		</footer>
   </div>	
  	<!-- footer --> 
 
</body>
</html>