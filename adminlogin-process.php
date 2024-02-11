<?php
session_start();
if(isset($_POST['sign']))
{
    extract($_POST);
    include 'db_connection.php';
    $sql=mysqli_query($con,"SELECT * FROM admin where admin_email='$admin_email' and admin_password='$admin_password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["admin_id"] = $row['admin_id'];
		$_SESSION["admin_name"]=$row['admin_name'];
        $_SESSION["admin_email"]=$row['admin_email'];
        
        
        header("Location: admin.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>