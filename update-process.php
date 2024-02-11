<?php
include_once 'db_connection.php';
include_once 'header.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE image set id='" . $_POST['id'] . "', file_name='" . $_POST['file_name'] . "', uploaded_on='" . $_POST['uploaded_on'] . "', status='" . $_POST['status'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM image WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Product Data</title>
<style>
body {
font-family:Arial;
}
input {
font-family:Arial;
font-size:14px;
}
label{
font-family:Arial;
font-size:14px;
color:#999999;
}
.button {
background-color: SkyBlue;
padding:5px;
border-color:white;
border-radius:4px;
color:white;
}
.txtField {
padding: 5px;
border:#fedc4d 1px solid;
border-radius:4px;
}
.message {
color: #FF0000;
text-align: center;
width: 100%;
}
.link{
text-decoration:none;
color:#5e8fc7;
font-size:11px;
}
</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="allrecords.php">Employee List</a>
</div>
<lable>ID:</lable> <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
File Name: <br>
<input type="text" name="file_name" class="txtField" value="<?php echo $row['file_name']; ?>">
<br>
Uploaded_on :<br>
<input type="text" name="uploaded_on" class="txtField" value="<?php echo $row['uploaded_on']; ?>">
<br>
Status:<br>
<input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">

</form>
</body>
</html>