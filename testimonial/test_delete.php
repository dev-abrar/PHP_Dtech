<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select = "SELECT * FROM tests WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['img'] != null){
  unlink('../upload/test/'.$after_assoc['img']);
}
$delete = "DELETE FROM tests WHERE id=$id";
mysqli_query($db_connect, $delete);
header('location:test.php');

?>
