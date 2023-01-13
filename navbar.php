<?php
session_start();
include"mydbconnect.php";
$con=openDatabase();
$i=1;
$qry1 = "select * from products";
$a1 = useDatabase($qry1);
$_SESSION['count']=0;
while($row = mysqli_fetch_array($a1))
{
  if($row[4]==0)
  $_SESSION['count']+=1;
}
$b1=count(array_unique($_SESSION['idpro']));
// if($b1){$b1+=1;}
?>
<nav class="navbar navbar-expand-lg navbar-inverse"> 
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Home</a>
      </div>
   
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav"> 
          <!-- <li class="active"><a href="#">New Account </a></li> -->
        <li class="active"><a href="product.php">Add Product </a></li>
          <li class="active"><a href=" cart.php">Cart <span class="badge"><?php print $b1; ?></span></a></li>
          <li class="active"><a href="supplierDetails.php">Supplier Details </a></li>
          <li class="active"><a href="showexpenses.php">Expenses Details </a></li>
          
        
        <ul class="nav navbar-nav" style="float:right;">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="about.php">Profile</a></li>
              <li><a href="outofstock.php">Items Out of Stock <span class="badge"><?php print $_SESSION['count']; ?></span></a></li>
              <li><a href="profits.php">Profit</a></li>
              <li><a href="registerSupplier.php">Add New Supplier</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>