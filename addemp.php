<?php
ini_set('mysql,connection_timeout',300);
ini_set('default_socket_timeout',300);
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$text=bin2hex($password);


$con = mysqli_connect("localhost","root","","book_club");

$sql="INSERT INTO employees (username,password,name) VALUES ('$username','$text','$name')";


if (mysqli_query($con, $sql)) {
	
 echo "<script>
alert('Employee $name is Added!');
window.location.href='http://localhost/Book_read/Admin.html';
</script>";


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
	
?>
