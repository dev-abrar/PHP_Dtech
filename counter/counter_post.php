<?php 
session_start();
require '../db.php';

$number = $_POST['number'];
$title = $_POST['title'];

if(empty($number)){
    $_SESSION['num'] = 'Number Field is required';
    header('location:counter.php');
}

if(empty($number)){
    $_SESSION['title'] = 'Title Field is required';
    header('location:counter.php');
}
else{
    $insert = "INSERT INTO counters(number, title)VALUES('$number', '$title')";
    mysqli_query($db_connect, $insert);
    $_SESSION['count'] = 'Successfully Added';
    header('location:counter.php');
}

?>