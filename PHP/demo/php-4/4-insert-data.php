<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_12_4";


$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO aptech_php_12_4.users (email, password)
VALUES ('nam@gmail.com','123456'),
('nu@gmail.com','123456')";

if (mysqli_query($connect, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);