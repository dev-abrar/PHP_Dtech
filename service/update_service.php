<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$icon = $_POST['icon'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$update  = "UPDATE services SET icon='$icon', title='$title', desp='$desp' WHERE id=$id";
mysqli_query($db_connect, $update);

header('location:service.php');

?>