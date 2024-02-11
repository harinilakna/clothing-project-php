<?php
include 'db_connection.php';
include 'header.php';
?>
<html>
<head><link rel="stylesheet" href="css/signup.css"></head>
<body>
<div class="box">
<p id="welcome">Welcome Back! Please Sign In</p>
<form action="signin_process.php" method="POST">
<div class="inner" style="background-color:yellow;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
    </div>
  </div>
  <br>
 
  </fieldset>
   <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label>
    </div>
  </div>
 <div class="col-12">
    <button type="submit" name="sign" class="btn btn-primary">SignIn</button>
	</div>
</div>
<p id="para">
    <span>Not a member? </span><a class="link" href="signup.php">Sign Up</a>
    </p>	
</form>
</div>
<body>
</html>