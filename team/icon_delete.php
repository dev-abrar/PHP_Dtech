<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$delete = "DELETE FROM team_icons WHERE id= $id";
mysqli_query($db_connect, $delete);
header('location:team_info.php#icons')
?>