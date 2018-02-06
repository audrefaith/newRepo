<?php
session_start();
include 'include/dbconnection.php';

        $title = $_POST['title'];
        $pages = $_POST['pages'];
        $author = $_POST['author'];
        $year  = $_POST['year'];
    

    $sql = "INSERT INTO `db`(title, pages, author, year)
    
    VALUES ('$title', '$pages', '$author', '$year')";
    
    $result = mysqli_query($dbconn, $sql);
        
?>