<?php 
	include('functions.php');
	include('comment.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
    }
?>

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "multi_login");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
	
</style>
</head>
<body>
	<div class="navi">
		<h2>Recipes</h2>
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
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	<div id="content">
	  <?php
	    while ($row = mysqli_fetch_array($result)) {
	      echo "<div id='img_div'>";
	      	echo "<img src='admin/images/".$row['image']."' >";
	      	echo "<p1>".$row['image_text']."</p1>";
	      echo "</div>";
	    }
	  ?>
  </div>   
</body>
</html>