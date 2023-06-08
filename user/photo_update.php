<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$upload_photo = $_FILES['photo'];
$explode = explode('.', $upload_photo['name']);
$extension = end($explode);
$allowed_extension = array('jpg', 'png');

if(in_array($extension, $allowed_extension)){
    if($upload_photo['size'] <= 10000000){
        $select_img = "SELECT * FROM users WHERE id=$id";
        $select_res = mysqli_query($db_connect, $select_img);
        $after_assoc_img = mysqli_fetch_assoc($select_res);
        if($after_assoc_img['photo'] != null){
            $delete_from = '../upload/user/'.$after_assoc_img['photo'];
            unlink($delete_from);
        }

        $file_name =$id.'.'.$extension;
        $new_location = '../upload/user/'.$file_name;
        move_uploaded_file($upload_photo['tmp_name'], $new_location);
        $update = "UPDATE users SET photo='$file_name' WHERE id=$id";
        mysqli_query($db_connect, $update);
        $_SESSION['up_photo'] = 'Updated Successfully';
        header('location:profile.php');
    }
    else{
        $_SESSION['photo'] = 'File size too large';
        header('location:profile.php');
    }
    
}
else{
    $_SESSION['photo'] = 'Invalid Extension';
    header('location:profile.php');
}

?>