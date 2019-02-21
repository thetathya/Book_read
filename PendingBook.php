<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'book_club');
$emp_id = $_SESSION['emp_id'];
$book_id;


$conn = mysqli_connect("localhost", "root", "", "book_club");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from book_instance where emp_id = '$emp_id' ";
$result = mysqli_query($conn, $query);



	

// echo "Connected successfully";




?>


<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Test Info</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<span class="navbar-brand mb-0 h1"><a href="http://jyoti.co.in/" target="_blank" style="color: inherit">Jyoti CNC Book Read</a></span>
				<!-- <a class="navbar-brand" href="#"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				  <div class="navbar-nav">
				  	<a class="nav-item nav-link " href="profile.php">Profile <span class="sr-only">(current)</span></a>
				 	<a class="nav-item nav-link" href="Display_All_Books.php">View Books <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link active" href="PendingBook.php">My Books</a>
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
		<div class="list-group">
			
		<?php
			if($result-> num_rows > 0) {
				while($book = $result->fetch_assoc()) {
					$book_id = $book['book_id'];
					$book_status = $book['status'];
					$stmt = "select * from books where bid = '$book_id' ";
					$entries = mysqli_query($conn, $stmt);
					while($empBook = $entries-> fetch_assoc()) {
						$booksTitle = $empBook['title'];
						$bookSummary = $empBook['summary'];
						$booksAuthor = $empBook['author'];
						$bookTags = $empBook['tags'];
						$bookType = $empBook['type'];
	
						if($book_status == 0) {
							echo	'<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">'.$booksTitle.'</h5>
										<small class="text-muted">7 days ago</small>
									</div>
									<p class="mb-1">'.$bookSummary.'</p>
									<span class="badge badge-primary badge-pill">Reading</span>
								</a>';
							}
							elseif ($book_status == 1) {
							echo	'<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1">'.$booksTitle.'</h5>
											<small class="text-muted">5 days ago</small>
										</div>
										<p class="mb-1">'.$bookSummary.'</p>
										<span class="badge badge-warning badge-pill">Test Pending</span>
									</a>';
							}
							else {
							echo	'<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">'.$booksTitle.'</h5>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">'.$bookSummary.'</p>
									<span class="badge badge-success badge-pill">Test Completed</span>
								</a>';
							}
						

						}
				}

				}
			
			
			
		
		
		
		
		
		?>
		
		
		
		
		<!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Book heading</h5>
					<small>3 days ago</small>
				</div>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<span class="badge badge-success badge-pill">Test Completed</span>
			</a>
			<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Article heading</h5>
					<small class="text-muted">5 days ago</small>
				</div>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<span class="badge badge-warning badge-pill">Test Pending</span>
			</a>
			<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Book heading</h5>
					<small class="text-muted">7 days ago</small>
				</div>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<span class="badge badge-primary badge-pill">Reading</span>
			</a> -->
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>