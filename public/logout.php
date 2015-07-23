<?php
session_start();

$_SESSION['LOGGED_IN_USER'] = false;

header('Location: Portfolio.html');
exit();

session_destroy();

?>


    