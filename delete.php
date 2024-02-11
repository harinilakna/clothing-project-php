<?php
include_once 'db_connection.php';
include_once 'header.php';
$result = mysqli_query($con,"SELECT * FROM image");
?>

<!DOCTYPE html>
<html>
<head>
 <style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: grey;
}
.flex-container{
	margin-top:50px;
	display:flex;
	justify-content:center;
	align-items:center;
}



 </style>
<title>Delete employee data</title>
</head>
<body>
<div class="flex-container">
<table>
	<tr>
	    <td>id</td>
		<td>File Name</td>
		<td>Uploaded_on</td>
		<td>Status</td>
		
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	 <td><?php echo $row["id"]; ?></td>
     <td><?php echo $row["file_name"]; ?></td>
	 <td><?php echo $row["uploaded_on"]; ?></td>
	 <td><?php echo $row["status"]; ?></td>
	<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</div>
</body>
</html>