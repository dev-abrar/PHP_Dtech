<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$select = "SELECT * FROM logos WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_asccoc = mysqli_fetch_assoc($select_res);
if($after_asccoc['logo'] != null){
    $delete_from = '../upload/logo/'.$after_asccoc['logo'];
    unlink($delete_from);
}

$delete = "DELETE FROM logos WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['logo_delete'] = 'Logo Deleted Successfully';
header('location:logo.php');

?>