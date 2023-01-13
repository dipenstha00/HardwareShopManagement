<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>out of stock</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/myscript.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php"; $con=openDatabase(); $i=1; ?>
  <div class="container">
   <div class="col">
     <h3>Out of Stock Products:</h3>
   </div>
   <div class="col">
   <form method="post" >
      <div class="form-group has-success has-feedback" >
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-1" for="inputGroupSuccess2" id="searchbar">SEARCH</label>
        <div class="col-sm-8">
          <div class="input-group">
            <span class="input-group-addon"/>Search</span>
            <input class="form-control" type="text" name="disp"/>
            <div class="input-group-addon">
              <button  class="btn-link"type="submit" name="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
          </div>
        </div>
      </div>
    </form>
   </div>
    <?php  $qry = "select * from products";
      $a = useDatabase($qry);
    //fetching data from database
    while($row = mysqli_fetch_array($a)){
      if($row[4]==0)
      {?>
      <div class="col-md-3 product-grids">
                  <div class="agile-products">
                    <div class="new-tag"><?php print "<h6>Nil</h6>";?></div>
                    <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                    <div class="agile-product-text">
                      <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                      <?php print "<h6>Rs".$row[2]."/-</h6>";?>
                      </div>
                  </div>
                  </div>
                <?php
              }

            }
   closeDatabase();
    ?>

</div>
</div>
<!-- <footer class="color1" style=" position: absolute; bottom: 0px; "></footer>   -->
  </body>
  </html>
