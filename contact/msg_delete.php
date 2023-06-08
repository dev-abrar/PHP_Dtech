<?php 
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM messages WHERE id=$id";
mysqli_query($db_connect, $delete);
header('location:contact.php');
?>