<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" >
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >

  </head>
  <body>
  <?php include "navbar.php"; $e= $_SESSION['e'];
$query="select * from users where email='$e'";
$row=useDatabase($query);
$result=$row->fetch_array(); ?>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name"><?=  $result['f_name'] . $result['l_name'] ?></h5>
				<h6 class="user-email"><?= $result['email']; ?> </h6>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="fullName" value= "<?=  $result['f_name'] . $result['l_name'] ; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" value="<?= $result['email']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" value="<?= $result['phone_number']; ?>">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Address</label>
					<input type="name" class="form-control" id="Street" value="<?= $result['Address']; ?>">
				</div>
			</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<footer class="color1" style=" position: absolute; bottom: 0px; "></footer>  
</body>
</html>
