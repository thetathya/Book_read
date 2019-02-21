<?php

    $empId = '11';
    function getEmpData($empId) {
        $employee;
        $conn = mysqli_connect('localhost', 'root', '', 'book_club');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "select * from employees where emp_id = '$empId' ";
    if($result = mysqli_query($conn, $query)) {
        while($row = $result-> fetch_assoc()) {
           $employee['username'] = $row['username'];
           $employee['password'] = $row['password']; 
           $employee['empId'] = $row['emp_id'];
           $employee['name'] = $row['name'];
        }
    }
    return $employee;
    }



    $bookId = 15;
    function getBookData($empId) {
        $employee;
        $conn = mysqli_connect('localhost', 'root', '', 'book_club');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "select * from books where bid = '$empId' ";
    if($result = mysqli_query($conn, $query)) {
        while($row = $result-> fetch_assoc()) {
           $employee['title'] = $row['title'];
           $employee['summary'] = $row['summary']; 
           $employee['bid'] = $row['bid'];
           $employee['author'] = $row['author'];
           $employee['tags'] = $row['tags'];
           $employee['type'] = $row['type'];
           

           
        }
    }
    return $employee;
    }

    $data = getBookData($bookId);
    echo $data['summary'];
    



?>