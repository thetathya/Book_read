<?php
ini_set('mysql,connection_timeout',300);
ini_set('default_socket_timeout',300);
$title = $_POST['bookname'];

$con = mysqli_connect("localhost","root","","book_club");


$sql = "DELETE FROM books WHERE title='$title'";


if ($con->query($sql)== TRUE) {
    echo "<script>
alert('Book $title is Deleted!');
window.location.href='http://localhost/Book_read/Admin.html';
</script>";

} else {
	echo "<script>
     alert('Error Deleting Book!!!');
	 window.location.href='http://localhost/Book_read/Admin.html';
</script>";
}
$con->close();
?>
