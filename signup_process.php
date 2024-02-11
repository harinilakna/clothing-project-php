<?php
include "db_connection.php";

if(isset($_POST['submit']))
{ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$telephone = $_POST['telephone'];

$sql =("INSERT INTO register(id,firstname,lastname,email,password,address,address2,city,telephone) VALUES (null,'$firstname','$lastname' ,'$email','$password','$address','$address2','$city','$telephone')");
 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}

?>


   


