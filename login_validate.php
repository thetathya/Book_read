<?php 
session_start();
$uname=$_POST['user'];
$text=$_POST['password'];
$pass= bin2hex($text);
$select =$_POST['options']=="administrator" ? "administrator" : "employees";

$con=mysqli_connect("localhost","root","","book_club");
$sql ="select * from  $select where BINARY username='$uname' AND BINARY password='$pass'";
$result = $con->query($sql);
if($result->num_rows > 0){
	
	echo "Logged in sucessfully";
	$_SESSION['user'] = $uname;
	
	if($select=="administrator")
		header("location:http://localhost/Book_read/Admin.html");
	else
		header("location:http://localhost/Book_read/Display_All_Books.html");

}
else{
	echo "Error";
	header("location:http://localhost/Book_read/Login.html");
}
?>