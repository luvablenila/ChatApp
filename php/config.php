<?php
  $hostname = "localhost";
  $username = "id16428903_divii";
  $password = "GH*8eH_pRYB*mLzs";
  $dbname = "id16428903_realtimechatting";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
