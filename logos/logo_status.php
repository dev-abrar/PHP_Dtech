<?php 
require '../db.php';

$id = $_GET['id'];

$select = "SELECT * FROM logos WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['status'] == 1){
  $update = "UPDATE logos SET status=0 WHERE id=$id";
  mysqli_query($db_connect, $update);
  header('location:logo.php');
}
else{
    $update = "UPDATE logos SET status=0";
    mysqli_query($db_connect, $update);

    $update2 = "UPDATE logos SET status=1 WHERE id=$id";
    mysqli_query($db_connect, $update2);
    header('location:logo.php');
}
?>