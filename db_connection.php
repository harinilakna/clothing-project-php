<?php
$con = mysqli_connect("localhost", "root","1234","clothing");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>