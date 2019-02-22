<?php
$con = mysqli_connect("localhost","root","","book_club");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from test";
$result = mysqli_query($con, $query);
$book_id= 121;


	

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
	<title>Test</title>
</head>
<body>
	<div class="container">
		<form action="test_validate.php" method="post">
					<?php
					
					
					if($result-> num_rows > 0) {
							while($ques = $result->fetch_assoc()) {
								
							$question = $ques['question'];
							$question_id = $ques['t_id'];    
							$option1 = $ques['op_1'];
							$option2 = $ques['op_2'];
							$option3 = $ques['op_3'];
							$option4 = $ques['op_4'];
		
							
							echo '<div class="card">
							<div class="card-header">Question (Number)</div>
							<div class="card-body">
								<h5 class="card-title">This is where questions will get printed</h5>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="options" id="option1" value="option1" checked>
									<label class="form-check-label" for="option1">
									Option 1
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="options" id="option2" value="option2">
									<label class="form-check-label" for="option2">
									Option 2
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="options" id="option3" value="option3">
									<label class="form-check-label" for="option3">
									Option 3
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="options" id="option4" value="option4">
									<label class="form-check-label" for="option4">
									Option 4
									</label>
								</div>
							</div>
						</div>';

							}
							

					}
					else { echo "error";}
				
				
				?>
				<input type="hidden" name="book_id" value='<?php echo $book_id; ?>'>
							<input type="submit" name="login" class="btn btn-primary">
			
		</form>
		
		<ul class="list-group list-group-horizontal">
			<li class="list-group-item active">Result</li>
			<li class="list-group-item">Marks Got</li>
			<li class="list-group-item">Out Of</li>
		</ul>
		<div class="alert alert-success" role="alert">Test Completed</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


