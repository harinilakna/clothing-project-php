<?php
include_once 'db_connection.php';
include_once 'header.php';


$result = mysqli_query($con,"SELECT * FROM image");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> All Records Of Images</title>
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
    background-color:pink;
}
.flex-container{
	margin-top:50px;
	display:flex;
	justify-content:center;
	align-items:center;
}


 </style>
 
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="flex-container">
  <table>
  
  <tr>
    <td>id</td>
    <td>file_name</td>
    <td>uploaded_on</td>
    <td>status</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["file_name"]; ?></td>
    <td><?php echo $row["uploaded_on"]?></td>
    <td><?php echo $row["status"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>