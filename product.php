 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add product page </title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
  </head>
  <body>
<?php include "navbar.php"; 
if (isset($_POST['add']))
{
  $call=openDatabase();
  $PID=$_POST['ID'];
  $PNM=$_POST['Name'];
  $PSP=$_POST['Buy'];
  $PR=$_POST['sell'];
  $PBP=$_POST['quantity'];
  $PW=$_POST['description'];

  mkdir("images/".$PID);

  chmod("images/".$PID, 0644);

  // Everything for owner, read and execute for others
  chmod("images/".$PID, 0755);

  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "images/".$PID."/1.jpg");

  $query="INSERT INTO products (id,name,price,des,quantity,costprice)values
  ('$PID','$PNM','$PR','$PW','$PBP','$PSP')";
  $result=useDatabase($query);
  if(!$result)
  {
    echo "<script>
    alert('Error is in running query. Try again');
    // window.location.href='product.php';
    </script>";
  }
  echo "<script>
    alert('Successfully Added Product');
    // window.location.href='product.php';
    </script>" ;
}
closeDatabase();
 ?>
 <div class="container">
  <div class="col">
    <h2>&#9997 Add New Product</h2>
  </div>
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Product Details</strong></div>
      <div class="panel-body">
      <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="prodductId" class="col-sm-3 control-label">Prouct ID</label>
                    <div class="col-sm-9">
                        <input type="number" id="prodductId" name="ID" placeholder="ID" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="productName" class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="productName" name="Name" placeholder="Product Name" class="form-control" autofocus required>
                        <span class="help-block">Product Name, eg.: Screw, Hammer</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bprice" class="col-sm-3 control-label">Buying Price</label>
                    <div class="col-sm-9">
                        <input type="number" id="bprice" name="Buy" placeholder="200" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sprice" class="col-sm-3 control-label">Selling Price</label>
                    <div class="col-sm-9">
                        <input type="number" id="sprice" name="sell" placeholder="300" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="number" id="quantity" name="quantity" placeholder="15" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" id="description" name="description" placeholder="Product Description" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="formFileDisabled" class="col-sm-3 control-label">Product Image</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" id="formFileDisabled"  name="fileToUpload" required  />
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" name="add">Add Product</button>
                    </div>
                </div>
            </form> <!-- /form -->
      </div>
    </div>
  </div>
 </div>
</body>
</html>
