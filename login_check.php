<?php
session_start();

if(!$_SESSION['login']){
    header('location:/Dominy/login.php');
}
?>