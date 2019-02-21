<?php
session_start();
$username;
$password;

$conn = mysqli_connect('localhost', 'root', '', 'book_club');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_SESSION['use'])) {
	header("Location: Display_All_Books.php");
}
if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from employees where username = '$username' and password = '$password' ";
	$result = mysqli_query($conn, $query);

	

	if ($result->num_rows > 0) {
		$_SESSION['use'] = $username;
		header("Location: Display_All_Books.php");
		while($emp = $result->fetch_assoc()) {
			$_SESSION['emp_id'] = $emp['emp_id'];
			
		}
	
	}
	
	else {
		echo "Invalid Credentials.";
	}
}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="floating-labels.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<title>Log In Page</title>

		<style>
				/* Style all input fields */
				
				
				/* The message box is shown when the user clicks on the password field */
				#message {
					display:none;
					background: #f1f1f1;
					color: #000;
					position: relative;
					padding: 20px;
					margin-top: 10px;
					font-size: 12px;
				}			
				
				/* Add a green text color and a checkmark when the requirements are right */
				.valid {
				  color: green;
				  display: none;
				  margin-top: 0%;
				  padding: 0%;
				}
				
				/* Add a red text color and an "x" when the requirements are wrong */
				.invalid {
				  color: red;
				}
				
				</style>
				

	</head>
	<body>
		<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<span class="navbar-brand mb-0 h1"><a href="http://jyoti.co.in/" target="_blank">Jyoti CNC Book Read</a></span>
				<!-- <a class="navbar-brand" href="#"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link" href="#">Contact Us</a>
					</div>
				</div>
			</nav>
			<div class="center-signin">
			<form class="form-signin" method="post" action="">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<label class="btn btn-secondary active">
							<input type="radio" name="options" value="administrator" autocomplete="off" checked>Admin
						</label>
						<label class="btn btn-secondary">
							<input type="radio" name="options" value="employees" autocomplete="off">Employee
						</label>
					</div>
					<div>
						<br>
					</div>
					<br>
					<div class="form-label-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
						<label for="inpuser">Username</label>
					</div>
					<div class="form-label-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						<label for="inputPassword">Password</label>
					</div>
					
					<div id="message" class="invalid">
						<!-- <span id="displaymessage" color="black">Password must contain the following:</span><br> -->
						<span id="letter" class="invalid">A <b>lowercase</b> letter</span>
						<span id="capital" class="invalid">A <b>capital (uppercase)</b> letter</span>
						<span id="number" class="invalid">A <b>number</b></span>
						<span id="length" class="invalid">Minimum <b>8 characters</b></span>
					</div>

					 <input type="submit" value="Submit" name="login" class="btn btn-lg btn-primary btn-block"> 
				</form>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
			var myInput = document.getElementById("password");
			var letter = document.getElementById("letter");
			var capital = document.getElementById("capital");
			var number = document.getElementById("number");
			var length = document.getElementById("length");
			var displaymessage = document.getElementById("message");

			// When the user clicks on the password field, show the message box
			myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
			}

			// When the user clicks outside of the password field, hide the message box
			myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
			}

			// When the user starts to type something inside the password field
			myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {  
				letter.classList.remove("invalid");
				letter.classList.add("valid");
				displaymessage.classList.remove("invalid");
				displaymessage.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
				displaymessage.classList.remove("valid");
				displaymessage.classList.add("invalid");
			}
			
			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if(myInput.value.match(upperCaseLetters)) {  
				capital.classList.remove("invalid");
				capital.classList.add("valid");
				displaymessage.classList.remove("invalid");
				displaymessage.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
				displaymessage.classList.remove("valid");
				displaymessage.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if(myInput.value.match(numbers)) {  
				number.classList.remove("invalid");
				number.classList.add("valid");
				displaymessage.classList.remove("invalid");
				displaymessage.classList.add("valid");				
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
				displaymessage.classList.remove("valid");
				displaymessage.classList.add("invalid");
			}
			
			// Validate length
			if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
				displaymessage.classList.remove("invalid");
				displaymessage.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
				displaymessage.classList.remove("valid");
				displaymessage.classList.add("invalid");
			}
			if((document.getElementById("letter").style.display &&
			document.getElementById("letter").style.display &&
			document.getElementById("letter").style.display &&
			document.getElementById("letter").style.display ) == "none"){
				document.getElementById("message").style.display = none;
			}
			console.log(document.getElementById("letter").style.display);

			}
		</script>
	</body>
</html>