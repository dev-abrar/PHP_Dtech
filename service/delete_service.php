<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$delete = "DELETE FROM services WHERE id=$id";
mysqli_query($db_connect, $delete);

$_SESSION['ser_delete']= 'Successfully Deleted';
header('location:service.php');
?>