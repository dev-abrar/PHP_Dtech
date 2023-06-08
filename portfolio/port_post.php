<?php 
session_start();
require '../db.php';

$class_name = $_POST['class_name'];

if(empty($class_name)){
    $_SESSION['class'] = 'Class Name Field is required'; 
        header('location:portfolio.php');
}
$thum = $_FILES['thum'];
$explode = explode('.', $thum['name']);
$extension = end($explode);
$thum_name = $thum['name'];


$feature = $_FILES['feature'];
$explode2 = explode('.', $feature['name']);
$extension2 = end($explode2);
$feature_name = $feature['name'];

if(!empty($thum_name)){
    if(!empty($feature_name)){
        $insert = "INSERT INTO portfolios(class_name)VALUES('$class_name')";
        mysqli_query($db_connect, $insert);
        $last_id = mysqli_insert_id($db_connect);

        $file_name = $last_id.'.'.$extension;
        $new_location = '../upload/portfolio/thum/'.$file_name;
        move_uploaded_file($thum['tmp_name'], $new_location);

        $file_name2 = $last_id.'.'.$extension2;
        $new_location2 = '../upload/portfolio/feature/'.$file_name2;
        move_uploaded_file($feature['tmp_name'], $new_location2);

        $update = "UPDATE portfolios SET class_name='$class_name', thum='$file_name', feature='$file_name2' WHERE id=$last_id";
        mysqli_query($db_connect, $update);
        $_SESSION['port'] = 'SuccessFully Added Portfolio'; 
        header('location:portfolio.php');
    }

    else{
        $_SESSION['feature'] = 'Feature Field is required'; 
        header('location:portfolio.php');
    }
    
}
else{
    $_SESSION['thum'] = 'Thumnail Field is required'; 
    header('location:portfolio.php');
}

?>