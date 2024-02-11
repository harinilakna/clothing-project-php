<?php
  include 'header.php';
  
  session_start();
				include 'db_connection.php';
				$id= $_SESSION["id"];
				$sql=mysqli_query($con,"SELECT * FROM register where id='$id' ");
				$row  = mysqli_fetch_array($sql);
?>



<!DOCTYPE>
<html>
<body>
<div class="signup-form">
    <form action="welcome.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>
         
            
        <p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["firstname"] ?> <?php echo $_SESSION["lastname"] ?></p>
		
		
		
		
		
		<p id="para">
         <span>Want to Leave the Page? </span><a class="link" href="signout.php">Sign Out</a>
         </p>
        
    </form>
	
</div>
</body>
</html>