<?php 

function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
			$name = $_POST['name'];
			$time = $_POST['time'];
			$comment = $_POST['comment'];

			$sql = "INSERT INTO comments (name, time, comment) VALUES ('$name', '$time', 'comment')";
			$result = $conn->query($sql);

	}
}
function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'><p>";
			echo $row['name']."<br>";
			echo $row['time']."<br>";
			echo nl2br($row['comment']);
		echo "</p>
			<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='id' value='".$row['id']."'>				
				<button type='submit' name='commentDelete'>Delete</button>
			</form>
			<form class='edit-form' method='POST' action='".editComments($conn)."'>
				<input type='hidden' name='id' value='".$row['id']."'>
				<input type='hidden' name='name' value='".$row['name']."'>
				<input type='hidden' name='time' value='".$row['time']."'>
				<input type='hidden' name='comment' value='".$row['comment']."'>
				<button>Edit</button
			</form>
		</div>";
	}
	
}	

function editComments($conn) {
	if (isset($_POST['comment'])){
			$cid = $_POST['id'];
			$cname = $_POST['name'];
			$ctime = $_POST['time'];
			$comment = $_POST['comment'];

			$sql = "UPDATE comments SET comment='$comment' WHERE id='$id'";
			$result = $conn->query($sql);
			header("Location: index.php");
	}
}

function deleteComments($conn) {
	if (isset($_POST['commentDelete'])){
			$cid = $_POST['cid'];
		

			$sql = "DELETE FROM comments WHERE id='$id'";
			$result = $conn->query($sql);
			header("Location: index.php");
	}
}

?>