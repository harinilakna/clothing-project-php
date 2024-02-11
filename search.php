<?php 
// Include the database configuration file  
require_once 'db_connection.php'; 
require_once 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<body>
<table class="table table-bordered" border="2">
<tr> <td colspan="5"><center><p>&#128151;</p><h3>Previously Uploaded | <a href="add.php" >Add Image</a></td></tr>
  <tr> 
      
    <?php 
	$search=$_GET['search'];
	$fetchqry ="SELECT file_name FROM image WHERE file_name like '".$search."%'" ; 
    $result=mysqli_query($con,$fetchqry);
    $num=mysqli_num_rows($result);
    if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
      <tr><td><p><?php echo $row['file_name'];?></p></td><td><img src="uploads/<?php echo $row['file_name']?>" width="200px" height="200px" /> </td>
        
      <?php
    }
    }
    ?>
  </tr>
</table>
</div>

</body>
</html>







