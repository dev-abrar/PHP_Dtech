<?php 
session_start();
require '../db.php';

$name = $_POST['name'];
$position = $_POST['position'];
$desp = mysqli_real_escape_string($db_connect, $_POST['desp']);
$img = $_FILES['img'];



if(empty($img['name'])){
    if(empty($name)){
        $_SESSION['nam'] = ' Name Filed is required';
        header('location:team_info.php');
    }
    else{
        $insert = "INSERT INTO team_info(name, position, desp)VALUES('$name', '$position', '$desp') ";
        mysqli_query($db_connect, $insert);
        $last_id = mysqli_insert_id($db_connect);
        $_SESSION['team'] = 'Successfully Added';
        header('location:team_info.php');
    }
}
else{
    $explode = explode('.', $img['name']);
    $img_name = $img['name'];
    $extension = end($explode);
    $allowed_extenson = array('jpg', 'png', 'jpeg', 'webp');
    if(in_array($extension, $allowed_extenson)){
        if($img['size'] <= 50000000){
            $insert_img = "INSERT INTO team_info(name, position, desp, img)VALUES('$name', '$position', '$desp', '$img_name') ";
            mysqli_query($db_connect, $insert_img);
            $last_id = mysqli_insert_id($db_connect);
            $file_name = $last_id.'.'.$extension;
            $new_location = '../upload/team/'.$file_name;
            move_uploaded_file($img['tmp_name'], $new_location);
            $update = "UPDATE team_info SET img='$file_name' WHERE id=$last_id";
            mysqli_query($db_connect, $update);
            $_SESSION['team'] = 'Successfully Added';
            header('location:team_info.php');
        }
        else{
            $_SESSION['ext'] = 'File Size too large';
            header('location:team_info.php');
        }
    }
    else{
        $_SESSION['ext'] = 'Invalid Extenson';
        header('location:team_info.php');
    }
}



?>