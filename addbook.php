<?php
$title = $_POST['title'];
$summary = $_POST['summary'];
$author = $_POST['author'];
$tags = $_POST['tags'];
$type = $_POST['bookarc']=="book" ? "book" : "article";
$content = $_POST['textareabookarticle'];
$text=bin2hex($content);
$eval_question = $_POST['gridRadios']=="yes" ? "yes" : "no";


$con = mysqli_connect("localhost","root","","book_club");

$sql="INSERT INTO books (title,summary,author,tags,type,content,e_ques) VALUES ('$title','$summary','$author','$tags','$type','$text','$eval_question')";

if (mysqli_query($con, $sql)) {
	header("location:http://localhost/Book_read/Display_All_Books.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

