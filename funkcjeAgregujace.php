<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="pracownicy.php">Pracownicy</a>
  <a class="navigation_link2" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
</div>
  
<h1>GRZEGORZ SZYMANEK Nr28</h1>
  <div class="navigation">
  <a class="navigation_link3" href="https://nieumiem.herokuapp.com/">Funkcję Agregujące</a>
  
<?php
 

echo("<h3>ZADANIE 1 - SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>MAKSIMUM</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["Maksimum"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>ZADANIE 2 - SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>CAŁOŚĆ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["Dzial"]. "</td><td>" .$row["Całość"]. "</td><td>" .$row["Średnia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>ZADANIE 3 - SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>MAKSIMUM</th>");
        echo("<th>MINIMUM</th>");
        echo("<th>CAŁOŚĆ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["Dzial"]. "</td><td>" .$row["Maksimum"]. "</td><td>" .$row["Minimum"]. "</td><td>" .$row["Calosc"]. "</td><td>" .$row["Srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  echo("<h3>ZADANIE 4 - SELECT Dzial, Avg(zarobki) AS AVG FROM pracownicy GROUP BY dzial HAVING Avg(zarobki)<36</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT Dzial, Avg(zarobki) AS AVG FROM pracownicy GROUP BY dzial HAVING Avg(zarobki)<36');
        echo("<table border=1>");
        echo("<th>Dzial</th>");
        echo("<th>AVG</th>");
            while($row = $result -> fetch_assoc()){                                                                                                    
                echo("<tr>");
                    echo("<td>" .$row["Dzial"]. "</td><td>" .$row["AVG"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");