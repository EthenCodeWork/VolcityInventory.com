<?php require 'solarmax/inc/_global/config.php'; ?>
<?php require 'solarmax/inc/_global/views/head_start.php'; ?>
<?php require 'solarmax/inc/_global/views/head_end.php'; ?>
<?php require 'solarmax/inc/_global/views/page_start.php'; ?>
<?php

$authed = 0;

if($authed > 0){
    $redirect = '/dashboard.php';
    echo "<script>window.location = '$redirect';</script>";
}else{
    $redirect = '/signin.php';
    echo "<script>window.location = '$redirect';</script>";
};

if(!isset($_SESSION['username'])){
    header('signin.php');
}


?>


