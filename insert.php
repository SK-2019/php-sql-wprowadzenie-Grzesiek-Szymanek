<!DOCTYPE html>

<html>
  
  <head>
    <div class="nav">
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
    <a class="navigation_link1" href="pracownicy.php">Pracownicy</a>
    <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="navigation_link1" href="pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
  </div>
    <hr></hr>
  </head>
  
<body>
  
  <h1>TWOJE DANE</h1>

<?php

echo("<h3>IMIĘ:</h3>");
echo("<h3>".$_POST['imie']."</h3>");
  
echo("<h3>DZIAŁ:</h3>");  
echo("<h3>".$_POST['dzial']."</h3>");
  
echo("<h3>ZAROBKI:</h3>");
echo("<h3>".$_POST['zarobki']."</h3>");
  
echo("<h3>DATA URODZENIA:</h3>");  
echo("<h3>".$_POST['data_urodzenia']."</h3>");
  
  
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia)
VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>