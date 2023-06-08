<?php 
session_start();
require '../db.php';

date_default_timezone_set('Asia/Dhaka');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date("Y-m-d h:i:s") ;

if(empty($name)){
    $_SESSION['name'] = 'Name Field is required';
    header('location:../Dtech/index.php#contact');
}

if(empty($email)){
    $_SESSION['email'] = 'Email Field is required';
    header('location:../Dtech/index.php#contact');
}

if(empty($message)){
    $_SESSION['message'] = 'Message Field is required';
    header('location:../Dtech/index.php#contact');
}

else{
    $insert = "INSERT INTO messages(name, email, message, date)VALUES('$name', '$email', '$message', '$date')";
    mysqli_query($db_connect, $insert);
    $_SESSION['success'] = 'Your Message has been sent successfully';
    header('location:../Dtech/index.php#contact');
}
?>