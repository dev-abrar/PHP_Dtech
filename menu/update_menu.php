<?php
session_start();
require '../db.php';

$id =$_POST['id'];
$menu_name = $_POST['menu_name'];
$menu_link = $_POST['menu_link'];

$update = "UPDATE menus SET menu_name='$menu_name', menu_link='$menu_link' WHERE id=$id";
mysqli_query($db_connect, $update);

header('location:menu.php');

?>