<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$select_img = "SELECT * FROM users WHERE id=$id";
$select_res = mysqli_query($db_connect, $select_img);
$after_assoc_img = mysqli_fetch_assoc($select_res);
if($after_assoc_img['photo'] != null){
    unlink('../upload/user/'.$after_assoc_img['photo']);
}


$delete = "DELETE FROM users WHERE id='$id'";
mysqli_query($db_connect, $delete);

header('location:user.php');


?>