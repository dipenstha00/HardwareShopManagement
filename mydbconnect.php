
<?php

function queryDatabase($queryString)
{
  $con=openDatabase();
  $result=useDatabase($queryString);
  closeDatabase();
  return $result;
};

function openDatabase()
{
  $con=mysqli_connect('localhost', 'root', '','shop_management');
  if(!$con)
  {
    die('There is some error in connection to database');
  }
  return $con;
};

function useDatabase($queryString)
{
  //$result is associative array for requested query
  $con = mysqli_connect('localhost', 'root', '','shop_management');
  $result = mysqli_query ($con,$queryString);
  return $result;
};

function closeDatabase()
{
  //close db
  $con = mysqli_connect('localhost', 'root', '','shop_management');
  mysqli_close($con);
};



?>
