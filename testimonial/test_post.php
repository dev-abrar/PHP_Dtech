<?php 
session_start();
require '../db.php';

$title = $_POST['title'];
$desp = $_POST['desp'];

if(empty($title)){
    $_SESSION['title'] = 'Title Field is required';
    header('location:test.php');
}

if(empty($desp)){
    $_SESSION['desp'] = 'Description Field is required';
    header('location:test.php');
}

$img = $_FILES['img'];
$explode = explode('.', $img['name']);
$extension = end($explode);
$img_name = $img['name'];

if(empty($img_name)){
    $_SESSION['photo'] = 'Img Field is required';
    header('location:test.php');
}
else{
    
    $insert = "INSERT INTO tests(title, desp)VALUES('$title', '$desp')";
    mysqli_query($db_connect, $insert);
    $last_id = mysqli_insert_id($db_connect);

    $file_name = $last_id.'.'.$extension;
    $new_location = '../upload/test/'.$file_name;
    move_uploaded_file($img['tmp_name'], $new_location);
    $update = "UPDATE tests SET title='$title', desp='$desp', img='$file_name' WHERE id=$last_id";
    mysqli_query($db_connect, $update);
    $_SESSION['all'] = 'Successfully Added';
    header('location:test.php');
}

?>