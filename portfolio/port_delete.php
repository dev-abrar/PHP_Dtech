<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$select = "SELECT * FROM portfolios WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['thum'] !=null){
    unlink('../upload/portfolio/thum/'.$after_assoc['thum']);
}

if($after_assoc['feature'] !=null){
    unlink('../upload/portfolio/feature/'.$after_assoc['feature']);
}

$delete = "DELETE FROM portfolios WHERE id=$id";
mysqli_query($db_connect, $delete);
header('location:portfolio.php');
?>