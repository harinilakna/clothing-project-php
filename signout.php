<?php
include 'db_connection.php';
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["firstname"]);
    header("Location:signin.php");
?>