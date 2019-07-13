<?php 
include('../functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../landing.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<div class="navi">
       <h2>Admin - WELCOME!!</h2>
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
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red !important;">Logout</a>
                       &nbsp; <a href="create_user.php" style="color: red !important;"> + add user</a>
            <button><a href="../index.php" style="color: red !important;">Home</button></a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>	

<div id="content">

<?php $results = mysqli_query($db, "SELECT * FROM images"); ?>
<table id="table">
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo "<div id='img_div'>";?></td>
      <td><?php echo "<img src=".'images/'.$row['image']." height='200' width='200' class='img-thumbnail' />";?></td>
      <td><a href="#" data-toggle="popover" data-placement="bottom" data-content="<?php echo $row['image_text']; ?>" class="edit_btn">Recipe</a></td>
      <td><?php echo "</div>"; ?></td>
      <td>
        <a href="functions.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>
  <form method="POST" action="home.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="100000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="20" 
      	name="image_text" 
      	placeholder="Say something about this image...">
      	</textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>






<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>
