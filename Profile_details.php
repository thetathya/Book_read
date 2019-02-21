<?php 
session_start();


?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Profile</title>
	</head>
	<body>
		<!--Name 
			Change Password
			Test Results
			Total Books/Article completed
			Total Books/Article Pending
		-->
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
		<div class="container"><div class="card">
			<div class="card-header">
				Hey,Employee 
			</div>
			<div class="row">
				<div class="col">
					<button style="width: 100%;" class="btn btn-lg btn-primary" id="change" >Change Password</button>
					
					<script type="text/javascript">
    document.getElementById("change").onclick = function () {
        location.href = "http://localhost/Book_read/changepass.php";
    };
</script>
	
				</div>
				<div class="col">
					<button style="width: 100%;" class="btn btn-lg btn-primary mb-6" id="testres">Test Results(History)</button>
					<script type="text/javascript">
    document.getElementById("testres").onclick = function () {
        location.href = "http://localhost/Book_read/Test_Result.html";
    };
</script>
				</div>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Total Books Completed <span class="badge badge-success badge-pill">14</span></li>
				<li class="list-group-item">Total Books Pending <span class="badge badge-warning badge-pill">14</span></li>
				<li class="list-group-item">Total Article Completed <span class="badge badge-success badge-pill">14</span></li>
				<li class="list-group-item">Total Article Pending <span class="badge badge-warning badge-pill">14</span></li>
			</ul>
		</div></div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
