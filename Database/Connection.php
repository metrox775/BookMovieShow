<?php

$servername = "localhost";
$username = "root";
$password = "root";

class Connection
    {
        function mkConnection()
        {
try {
  $conn = new PDO("mysql:host=localhost;dbname=bookmovieshow","root","root");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  return $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
}


?>