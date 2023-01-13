
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Profit page </title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<?php include "navbar.php"; ?>
<div class="container">
  <div class="col">
    <h3>Profit this Week</h3>
  </div>
<table  class="table table-bordered table-hover">
    <tr >
      <th style="padding:15px; font-size:20px;color:darkblue;">Profit this week </th>
      <?php
      $t1=0;
      date_default_timezone_set("Asia/Kolkata");
      $mondate = date('Y-m-d',strtotime('last monday', strtotime('tomorrow')));
      $qry = "select profit from customers where date > ".$mondate." ";
      $a = useDatabase($qry);
      while($row = mysqli_fetch_array($a)){
           $t1+=$row[0];}
           print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
           <br>

      </tr>
        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this month </th>
          <?php
          $t1=0;
          $mon=date('m');
          $year=date('Y');
          $qry = "select profit from customers where date > ".$year."-".$mon."-00 ";
          $a = useDatabase($qry);
          while($row = mysqli_fetch_array($a)){
               $t1+=$row[0];}
            print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
        </tr>

        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this year </th>
        <?php
                  $t1=0;
             $qry = "select profit from customers where date > ".$year."-00-00 ";
             $a = useDatabase($qry);
             while($row = mysqli_fetch_array($a)){
                  $t1+=$row[0];}
                  print "<td style='padding:15px; font-size:1.3em;'>".$t1."</td>";
                  $t1="";

                   ?>
        </tr>
</table>
</div>
<?php closeDatabase(); ?>
<footer class="color1" style=" position: absolute; bottom: 0px; "></footer> 
</body>
</html>
