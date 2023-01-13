

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home page </title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/myscript.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >


  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> 
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>

 <?php include "navbar.php"; ?>

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
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <h1>Products</h1>
      <br>
      <div class="" id="tablecon">
        <?php
        if(isset($_POST['search']))
        {
          $t=$_POST['disp'];
          $q="select *from products where name LIKE '%".$t."%'";

          $a=useDatabase($q);
          if($a->num_rows== 0)
          {
            echo "<script>
            alert('The item is not present. Please try something else');
            window.location.href=home.php
            </script>";
            $qry = "select * from products ";
            $a = useDatabase($qry);
          }
        }
        else
        {
          $qry = "select * from products";
          $a = useDatabase($qry);
        }?>

            <?php
        //fetching data from database
        while($row = mysqli_fetch_array($a)){
          if($row[4]==0)
          continue;?>
          <div class="col-md-3 product-grids">
                      <div class="agile-products">
                        <div class="new-tag"><?php print "<h6>".$row[4]."</h6>";?></div>
                        <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                        <div class="agile-product-text">
                          <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                          <?php print "<h6>Rs".$row[2]."/-</h6>";?>
                          <form action="" method="post">
                            <?php print "<input type='hidden' name='idpro' value='$row[0]'>" ?>
                            <button type="submit" class="btn btn-success">Add to cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php   }
                    if(isset($_POST["idpro"]))
                    { $ids=$_SESSION['idpro'];
                        array_push($ids,$_POST["idpro"]);
                      $_SESSION['idpro']=$ids;
                     }
                     $b1=count(array_unique($_SESSION['idpro']));
                  ?>
      </div>
<br>
</div>
</div>
</div>

  </body>
  </html>
