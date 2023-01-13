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
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php"; ?>
<div class="container">
<div class="col">
  <h3>Expenses Details:</h3><br>
</div>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Expenses ID</th>
      <th scope="col">Expenses Name</th>
      <th scope="col">Date of Expense</th>
      <th scope="col">Amount Expended</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_management";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,date,amount FROM expenses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["id"]."</td><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["amount"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</tbody>
</table>
</div>
<footer class="color1" style=" position: absolute; bottom: 0px; "></footer>  
</body>
</html>
