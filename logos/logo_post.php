<?php 
session_start();
require '../db.php';

$logo = $_FILES['logo'];
$explod = explode('.', $logo['name']);
$name = $logo['name'];
$extension = end($explod);
$allowed_extension = array('png', 'jpg', 'gif', 'webp');

if(in_array($extension, $allowed_extension)){
    $insert = "INSERT INTO logos (logo) VALUES('$name')";
    mysqli_query($db_connect, $insert);
    $last_id = mysqli_insert_id($db_connect);
    $file_name = $last_id.'.'.$extension;
    $new_location = '../upload/logo/'.$file_name;
    move_uploaded_file($logo['tmp_name'], $new_location);
    $update = "UPDATE logos SET logo='$file_name' WHERE id='$last_id'";
    mysqli_query($db_connect, $update);
    $_SESSION['up_logo'] = 'Successfully Updated';
    header('location:logo.php');
}
else{
    $_SESSION['error'] = 'Invalid Extension';
    header('location:logo.php');
}

?>