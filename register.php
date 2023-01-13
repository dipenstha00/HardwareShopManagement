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
    <h3>Register Form</h3>
  </div>  
  <form class="form-horizontal" role="form">
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
                    <label for="phonenumber" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="number" id="phonenumber" name="" placeholder="+977-9812345678" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
</div>
</body>
</html>
