<?php 
session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);

$flag = true;

// Name 
if(empty($name)){
    $_SESSION['name'] = 'Name field is required';
    $flag = false;
    header('location:register.php');
}

// Email
if(empty($email)){
    $_SESSION['email'] = 'Email field is required';
    $flag = false;
    header('location:register.php');
}
else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email'] = 'Enter a validate Email ';
        $flag = false;
        header('location:register.php');
    }
}

// Password
if(empty($password)){
    $_SESSION['password'] = 'Password field is required';
    $flag = false;
    header('location:register.php');
}

// If All good
if($flag){
    $insert = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$after_hash')";
    mysqli_query($db_connect, $insert);

    $_SESSION['register'] = 'Successfully Registered';
    header('location:register.php');
}
else{
    $_SESSION['nam_val'] = $name;
    $_SESSION['email_val'] = $email;
}
?>