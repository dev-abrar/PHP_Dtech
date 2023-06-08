<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$head_one = $_POST['head_one'];
$head_two = $_POST['head_two'];
$head_three = $_POST['head_three'];
$head_four = $_POST['head_four'];
$pera_one = mysqli_real_escape_string($db_connect, $_POST['pera_one']);
$pera_two = mysqli_real_escape_string($db_connect, $_POST['pera_two']);

$update = "UPDATE banners SET head_one='$head_one', head_two='$head_two', head_three='$head_three', head_four='$head_four', pera_one='$pera_one', pera_two='$pera_two' WHERE id=$id";
mysqli_query($db_connect, $update);
$_SESSION['ban_suc'] = 'SUccessfully Updated';
header('location:banner_info.php');

?>