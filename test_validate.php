<?php

$conn = mysqli_connect("localhost", "root", "", "book_club");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['book_id'])) {

    $book_id = $_POST['book_id'];
    $query = "select * from test where book_id = '$book_id' ";
    $result = mysqli_query($conn, $query);

    while ($rows = mysqli_fetch_assoc($result)) {
        $question_id = $rows['t_id'];
        $answer = $rows['correct_op'];

        if($_POST[$question_id] == $answer) {
            echo "correct answer";
        }
        else {
            echo "Wrong answer";
        }
    }

}

?>