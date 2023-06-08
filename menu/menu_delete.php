<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM menus WHERE id=$id";
mysqli_query($db_connect, $delete);

$_SESSION['menu_delete'] = 'SuccessFully Deleted';
header('location:menu.php');

?>