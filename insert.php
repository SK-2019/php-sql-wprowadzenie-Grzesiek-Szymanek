<!DOCTYPE html>

<html>
<body>
  <h1>TWOJE DANE</h1>

<?php

echo("<li>IMIĘ:".$_POST["imie"]);
echo("<li>DZIAŁ:".$_POST["dzial"]);
echo("<li>ZAROBKI:".$_POST["zarobki"]);
echo("<li>DATA URODZENIA:".$_POST["data_urodzenia"]);
  
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'Bartosz', 1, 27,'1973-07-28')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
