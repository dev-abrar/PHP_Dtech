<?php
session_start();
require '../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$desp = mysqli_real_escape_string($db_connect, $_POST['desp']);
$img = $_FILES['img'];
$img_name = $img['name'];
$select = "SELECT * FROM team_info WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if(empty($img['name'])){
  $update = "UPDATE team_info SET name='$name', position='$position', desp='$desp' WHERE id=$id";
  mysqli_query($db_connect, $update);
  $_SESSION['team'] = 'Successfully Updated';
  header('location:team_info.php#card');
}
else{
    $explod = explode('.', $img['name']);
    $extension = end($explod);
    if($after_assoc['img'] != null){
      unlink('../upload/team/'.$after_assoc['img']);
    }
    $file_name = $id.'.'.$extension;
    $new_location = '../upload/team/'.$file_name;
    move_uploaded_file($img['tmp_name'], $new_location);
    $update = "UPDATE team_info SET name='$name', position='$position', desp='$desp', img='$file_name' WHERE id=$id";
    mysqli_query($db_connect, $update);
    $_SESSION['team'] = 'Successfully Added';
    header('location:team_info.php#card');
    
}

?>