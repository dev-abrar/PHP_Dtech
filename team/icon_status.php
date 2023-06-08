<?php 
session_start();
require '../db.php';

$id = $_GET['id'];
$select = "SELECT * FROM team_icons WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if($after_assoc['status'] == 1){
    $select2 = "SELECT COUNT(*) as total FROM team_icons WHERE status=1";
    $select_res2 = mysqli_query($db_connect, $select2);
    $after_assoc2 = mysqli_fetch_assoc($select_res2);
    if($after_assoc2['total'] > 3){
        $update = "UPDATE team_icons SET status=0 WHERE id=$id";
        mysqli_query($db_connect, $update);
        header('location:team_info.php#icons');
    }
    else{
        $_SESSION['limit'] = 'Less than 3 not deactivation allowed';
        header('location:team_info.php#icons');
    }
   
}

else{
    $select2 = "SELECT COUNT(*) as total FROM team_icons WHERE status=1";
    $select_res2 = mysqli_query($db_connect, $select2);
    $after_assoc2 = mysqli_fetch_assoc($select_res2);

    if($after_assoc2['total'] == 4){
        $_SESSION['limit'] = 'More than 4 not deactivation allowed';
        header('location:team_info.php#icons');
    }
    else{
        $update2 = "UPDATE team_icons SET status=1 WHERE id=$id";
        mysqli_query($db_connect, $update2);
        header('location:team_info.php#icons');
    }
}

?>