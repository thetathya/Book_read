<?php
$con = mysqli_connect("localhost","root","","book_club");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select book_id,question,op_1,op_2,op_3,op_4,correct_op from test";
$result = mysqli_query($con, $query);


	

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
		<div class="card">
			<div class="card-header">Question (<?php $count=0; if($result-> num_rows > 0) {
							while($mi = $result->fetch_assoc()) { $count++; }}echo $count; ?>)</div>
			<div class="card-body">	
			<?php
					
					
					if($result-> num_rows > 0) {
							while($ques = $result->fetch_assoc()) {
								
							$question = $ques['question'];
							$option1 = $ques['op_1'];
							$option2 = $ques['op_2'];
							$option3 = $ques['op_3'];
							$option4 = $ques['op_4'];
		
							
							echo '<h5 class="card-title">
									'.$question.'
								</h5>
								<div class="form-check">
								<input class="form-check-input" type="radio" name="options" id="option1" value="option1" checked>
								<label class="form-check-label" for="option1">
									'.$option1.'
								</label>
								</div>
								<div class="form-check">
								<input class="form-check-input" type="radio" name="options" id="option2" value="option2" >
								<label class="form-check-label" for="option2">
									'.$option2.'
								</label>
								</div>
								<div class="form-check">
								<input class="form-check-input" type="radio" name="options" id="option3" value="option3" >
								<label class="form-check-label" for="option3">
									'.$option3.'
								</label>
								</div>
								<div class="form-check">
								<input class="form-check-input" type="radio" name="options" id="option4" value="option4" >
								<label class="form-check-label" for="option1">
									'.$option4.'
								</label>
								</div>';

							}

					}
					else { echo "error";}
				
				
				?>
			</div>
		</div>
		<div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button><br>
			<br>
		</div>
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