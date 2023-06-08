<?php 
session_start();
require '../db.php';

$icon =$_POST['icon'];

$insert = "INSERT INTO team_icons(icon)VALUES('$icon')";
mysqli_query($db_connect, $insert);
$_SESSION['icon'] = 'Successfully Added';
header('location:team_info.php');

?>