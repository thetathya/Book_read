<?php 
session_start();
$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0 ;
if($error_id != 0 && $_GET['err']=='1'){
	echo "invalid username or password";
}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<span class="navbar-brand mb-0 h1"><a href="http://jyoti.co.in/" target="_blank" style="color: inherit">Jyoti CNC Book Read</a></span>
				<!-- <a class="navbar-brand" href="#"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				  <div class="navbar-nav">
					<a class="nav-item nav-link active" href="Display_All_Book.php">View Books <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link active" href="Pending_Book.html">My Books</a>
					<a class="nav-item nav-link" href="#">Contact Us</a>
				  </div>
				</div>
				<form class="form-inline"  action="logout.php">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search book name" aria-label="Search book name">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  &nbsp;&nbsp;&nbsp;&nbsp;
				  <button  class="btn btn-outline-success my-2 my-sm-0"> Log Out</button>
				</form>
			</nav>
		<div class="container">
			<h2>Change Password</h2>
			<form method="post" action="pass_change.php">
				<div class="form-group">
					<label for="oldpass">Current Password</label>
					<input type="password" class="form-control" name="oldpass" placeholder="Enter current Password">
				</div>
				<div class="form-group">
					<label for="newpass">New Password</label>
					<input type="password" class="form-control" name="newpass" placeholder="Enter New Password">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>