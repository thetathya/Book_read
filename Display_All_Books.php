<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'book_club');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select title, summary,author,tags,type from books";
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
		<title>Display All Books</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<span class="navbar-brand mb-0 h1">Jyoti CNC Book Read</span>
				<!-- <a class="navbar-brand" href="#"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">Guide</a>
						<a class="nav-item nav-link" href="#">Contact Us</a>
					</div>
				</div>
				<form class="form-inline"  action="logout.php">
					<input class="form-control mr-sm-2" type="search" placeholder="Search book name" aria-label="Search book name">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button  class="btn btn-outline-success my-2 my-sm-0" >Log Out</button>
				</form>
			</nav>
			<div class="alert alert-success" role="alert" align="center">
				<h3>Display All Books</h3>
			</div>
			<div class="row">
				<!--Card Layout Started-->
				<!--Tile for Book 1 started-->
				<div class="col-sm-6">
					
				<?php
					
					
					if($result-> num_rows > 0) {
							while($book = $result->fetch_assoc()) {
								
							$booksTitle = $book['title'];
							$bookSummary = $book['summary'];
							$booksAuthor = $book['author'];
							$bookTags = $book['tags'];
							$bookType = $book['type'];
		
							
							echo '<div class="card text-center">
								<div class="card-header">
									'.$bookType.'
								</div>
								<div class="card-body">
									<h5 class="card-title">'.$booksTitle.'</h5>
									<p class="card-text">'.$bookSummary.' (Author Name: '.$booksAuthor.' / '.$bookTags.')</p>
									<a href="#" class="btn btn-primary">Read</a>
									<a href="#" class="btn btn-primary">Give Exam</a>
								</div>
								<div class="card-footer text-muted">
									2 days ago
								</div>
							</div>';

							}

					}
					
				
				
				?>
				</div>
				<!--Tile For Book 1 Ended-->
				<!--Tile For Article 1 Started-->
				<div class="col-sm-6">
					<div class="card">
						<div class="card text-center">
							<div class="card-header">
								Article
							</div>
							<div class="card-body">
								<h5 class="card-title">Article Type</h5>
								<p class="card-text">Small Description About Article.(When/Where)</p>
								<a href="#" class="btn btn-primary">Read Full Article.</a>
							</div>
							<div class="card-footer text-muted">
								5 days ago
							</div>
						</div>
					</div>
				</div>
				<!--Tile For Article 1 Ended-->
				<!--Add further tiles of book/article between this comments from here-->
				<!--to here.-->
			</div>
			<!--Card Layout Over-->
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</div>
	</body>
</html>

