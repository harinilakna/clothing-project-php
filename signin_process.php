<?php
session_start();
if(isset($_POST['sign']))
{
    extract($_POST);
    include 'db_connection.php';
    $sql=mysqli_query($con,"SELECT * FROM register where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
     {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["firstname"]=$row['firstname'];
        $_SESSION["lastname"]=$row['lastname']; 
        header("Location: welcome.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>