<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$number = $_POST['number'];
$title = $_POST['title'];

$update = "UPDATE counters SET number='$number', title='$title' WHERE id=$id";
mysqli_query($db_connect, $update);
$_SESSION['count'] = 'Successfully Updated';
header('location:count_edit.php');
?>