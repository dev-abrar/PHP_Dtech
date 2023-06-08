<?php  
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);

$select = "SELECT COUNT(*) as got FROM users WHERE email='$email'";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if(empty($email)){
    $_SESSION['email'] = 'Email Field is required';
    header('location:login.php');
}
else{
    if($after_assoc['got'] == 1){
        $select2 = "SELECT * FROM users WHERE email='$email'";
        $select_res2 = mysqli_query($db_connect, $select2);
        $after_assoc2 = mysqli_fetch_assoc($select_res2);
        
        if(password_verify($password, $after_assoc2['password'])){
            $_SESSION['login'] = 'Login Done';
            $_SESSION['id'] = $after_assoc2['id'];
            header('location:dashboard.php');
        }
        else{
            $_SESSION['password'] = 'Wrong Password';
            header('location:login.php');
        }

    }
    else{
        $_SESSION['email'] = 'Invalid Email';
        header('location:login.php');
    }
}

if(empty($password)){
    $_SESSION['password'] = 'Password Field is required';
    header('location:login.php');
}

?>