<?php
define("TITLE","loginForm");
include("bootstrap.php");
 ?>
 <html>
<head>
<title><?php TITLE ?></title>
</head>
<body>
  <form action="validation.php" method="post">
    <div class="form-group">
<label for="nameType">Enter Youyr name</label>
<input type="text" class="form-control" id="nameType" name="myName" placeholder="Enter Your Name">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
 </html>
