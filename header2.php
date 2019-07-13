<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
	
</style>
</head>

<div id="navi">
	<ul class="nav justify-content-center">
	<a id="navlogo" href="landing.php"><img src="img/Logo.png" height="200px" width="200px"></a>
	</ul>
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
			<a href="index.php?logout='1'" style="color: red !important;"><h6>Logout</h6></a>
		</small>

	<?php endif ?>


</div>
</div>
</div>