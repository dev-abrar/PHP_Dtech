<?php 
session_start();

require '../db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$desp = mysqli_real_escape_string($db_connect, $_POST['desp']);

$update = "UPDATE about_bottoms SET title='$title', desp='$desp' WHERE id=$id";
mysqli_query($db_connect, $update);
$_SESSION['bottom'] = 'Successfully Updated';
header('location:about.php');

?>