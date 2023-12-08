<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  mysqli_set_charset($conn, "utf8mb4");
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
