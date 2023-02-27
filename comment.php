<?php 
session_start();
 ?>

<?php 
$kim = $_SESSION['kim'];




require_once('server.php');

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($connection, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>
<?php
  if(isset($_SESSION["kim"])){
    require_once('server.php');
    $kim = $_SESSION['kim'];
    $sql = "select * from users WHERE id = '$kim'";
    $sonuc = mysqli_query($connection,$sql);

    while($b = mysqli_fetch_array($sonuc)){
      $username = $b['username'];

    }
    echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style2.css">

	<title>Comment System in PHP - Pure Coding</title>
</head>
<body>
	<div class="wrapper">
	<a class="navbar-brand nav-link active bg-primary" href="Home.php"> Back to the Home page</a>
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>';
	}
	else{
		echo " You must come from the index page";
	}
	?>
		
		
		<?php if($kim==1): ?>
		<div class="prev-comments">
			 <?php  
			
			$sql = "SELECT * FROM comment";
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row["name"]; ?></h4>
				<a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a>
				<p><?php echo $row["comment"]; ?></p>
				<a class='navbar-brand nav-link active btn float-right' style="float:right; background:red; color:white"  href='sil.php?sil= <?php echo $row["id"]; ?>' >Delete</a>
			</div>
			<?php

				}
			}
			
			?>
		</div>
		<?php endif; ?>
		<?php if($kim!=1): ?>
		<div class="prev-comments">
			 <?php  
			
			$sql = "SELECT * FROM comment";
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row["name"]; ?></h4>
				<a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a>
				<p><?php echo $row["comment"]; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
		<?php endif; ?>
	</div>';


</body>
</html>