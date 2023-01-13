<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
<body>
<?php include "navbar.php"; ?>
<div class="container">
  <div class="col">
    <h3>Add Supplier Form</h3>
  </div>  
  <form class="form-horizontal" role="form" action="/Savesupplier.php" method="POST">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus required>
                        <span class="help-block">First Name, eg.: Robert, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastname" name="lname" placeholder="last Name" class="form-control" autofocus required>
                        <span class="help-block">Last Name, eg.: Williams, Davis</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="number" id="phonenumber" name="phoneNumber" placeholder="+977-9812345678" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" placeholder="NJ" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
</div>
</body>
</html>
