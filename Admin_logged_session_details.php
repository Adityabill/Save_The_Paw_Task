<?php

session_start();

if($_SERVER['QUERY_STRING']=='logout'){
    session_unset();
    header('Location: Admin_login.php ');
}
$username = $_SESSION['username'];
?>