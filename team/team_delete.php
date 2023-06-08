<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$select = "SELECT * FROM team_info WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);
if($after_assoc['img'] != null){
  unlink('../upload/team/'.$after_assoc['img']);
}
$delete = "DELETE FROM team_info WHERE id=$id";
mysqli_query($db_connect, $delete);
header('location:team_info.php#card');

?>