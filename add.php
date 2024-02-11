<?php
include "db_connection.php";
if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
	
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploads/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into image(file_name,uploaded_on,status) values('$filename',now(),1)";
		if(mysqli_query($con, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($con);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'
';
	}
	}
}
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owner.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="add.php" target="_self">Add Products</a>
  <a href="update.php">Update products</a>
  <a href="Delete.php">Delete Products</a>
  <a href="allrecords.php">All Products</a>
  <a href="index.php">Sign Out</a>
</div>
<div class="content" >
<div class="add" style="display:flex; justify-content:center; height:400px; padding-top:250px">
<form method='post' action='' enctype='multipart/form-data'>
<div class="form-group">
 <input type="file" name="image">
</div> 
<div class="form-group"> 
 <input type='submit' name='submit' value='Upload' class="btn btn-primary">
</div>
</form>
</div>
</div>
</body>
</html> 