<?php
include 'header.php';
?>
<html>
<head><link rel="stylesheet" href="css/signup.css"></head>

<body>
<p id="para">Register Now!</p>
<div class="box">
<form class="row g-3" action="signup_process.php" method="POST">
<div class="col-md-6">
    <label for="inputFirstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputFirstname" name="firstname" required>
  </div>
  <div class="col-md-6">
    <label for="inputLastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputLastname" name="lastname" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>
    <div class="col-md-4">
    <label for="inputTelephone" class="form-label">Telephone Number</label>
    <input type="text" class="form-control" id="inputTelephone" name="telephone">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">SignUp</button>
	<p style="text-align:center;">
    <span>Already register? </span><a class="link" href="signin.php">SignIn</a>
    </p>
	
  </div>
  
</form>
<div>

        
</body>
</html>