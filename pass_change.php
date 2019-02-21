<?php
ini_set('mysql,connection_timeout',300);
ini_set('default_socket_timeout',300);
$oldpass= bin2hex($_POST['oldpass']);
$newpass= bin2hex($_POST['newpass']);
$con = mysqli_connect("localhost","root","","book_club");
echo $oldpass .$newpass.$user;
$sql = "select username,password from employees where password='$oldpass'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    if(mysqli_query($con,"update employees set password ='$newpass' where password='$oldpass'"))
	{
		 echo "<script>
alert('Employee $user password Changed!');
window.location.href='http://localhost/Book_read/Profile_details.php';
</script>";
	}
	else
	{
		 echo "<script>
alert('$user Couldn't change password.');
window.location.href='http://localhost/Book_read/changepass.html';
</script>";
	}
} else {
    echo "<script>
alert('$user Incorrect Password!');
window.location.href='http://localhost/Book_read/changepass.php';
</script>";
	}

$con->close();
?>