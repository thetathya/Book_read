<?php 
	session_start();
	session_destroy();
	header("location:http://localhost/Book_read/index.php");
?>