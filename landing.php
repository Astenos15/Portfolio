<?php include('functions.php') ?>
<?php include('header.php'); ?>
<body>
<!-- nav -->
<div id="navi">
	<div class="row">
		<ul class="nav">
		<a id="navlogo" href="landing.php"><img src="img/Logo.png" height="80px" width="100px"></a>
		</ul>
		<ul class="nav">
	  <li id="media" class="nav-item">
	    <a href="index.php"><h5>Recipes</h5></a>
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
<!-- end of nav -->
<div class="container">
	<img id="headlogo" src="img/Logo.png">
</div>

<div class="parallax"></div>
<!-- About Us -->
<div class="jumbotron jumbotron-fluid mt-0">
  <div class="container">
    <h2 class="display-4">About Us</h2>
    <h6 class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</h6>
  </div>
</div>
	 
<!-- end of About Us -->

<div class="parallax2"></div>

<div class="jumbotron jumbotron-fluid col-lg-12 ml-0 mb-0 mt-5">
	  <?php include('footer.php'); ?>
</div>