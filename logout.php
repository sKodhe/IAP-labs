<?php
include_once 'user.php';
$instance= User::create();//new user session
$instance->logout();
?>
