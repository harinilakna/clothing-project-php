<?php
include_once 'db_connection.php';
include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<body>

<div class="flex-container" style=" display:flex; justify-content:center; margin-left:20%; margin-right:20%; margin-top:15%;">

<form action="adminlogin-process.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="admin_email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name="admin_password" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="sign" class="btn btn-primary">Submit</button>
</form>
</body>
</html>