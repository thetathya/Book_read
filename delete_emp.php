<?php
ini_set('mysql,connection_timeout',300);
ini_set('default_socket_timeout',300);
$username = $_POST['username'];

$con = mysqli_connect("localhost","root","","book_club");


$sql = "DELETE FROM employees WHERE username='$username'";


if ($con->query($sql)== TRUE) {
    echo "<script>
alert('Employee $username is Deleted!');
window.location.href='http://localhost/Book_read/Admin.html';
</script>";

} else {
	echo "<script>
     alert('Error Deleting Employee!!!');
	 window.location.href='http://localhost/Book_read/Admin.html';
</script>";
}
$con->close();
?>
