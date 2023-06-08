<?php 
session_start();
require '../db.php';

$menu_name = $_POST['menu_name'];
$menu_link = $_POST['menu_link'];

$insert = "INSERT INTO menus (menu_name, menu_link)VALUES('$menu_name', '$menu_link')";
mysqli_query($db_connect, $insert);

$_SESSION['menu'] = 'Successfully Added';
header('location:menu.php');
?>