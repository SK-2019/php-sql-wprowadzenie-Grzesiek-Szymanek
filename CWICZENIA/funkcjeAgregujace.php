<!DOCTYPE html>
<html>
  
<head>
<title>Grzesiek Szymanek 2TI gr2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/ASSETS/style.css">
<link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
</head>

<body>
   <div class="container">
     <div class="item colorRed">
      <h1 class="tltle"><a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">WYŚWIETL KOD - GitHub</a></h1>
     </div>
     
     <div class="item colorBlue">
      <h1 style="margin-left: 15%;">MENU STRONY</h1>
       
         <div class="nav">
           <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace.php">Funkcje Agregujące</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_kontynuacja.php">Kontynuacja Funkcji Agregujących</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_grupowanie.php">Funkcja Agregująca - Grupowanie</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_klauzula_HAVING.php">Funkcja Agregująca - Having</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_data_i_czas.php">Funkcja Agregująca - Data I Czas</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_formatowanie_dat.php">Funkcja Agregująca - Formatowanie Dat</a>
           <h1 style="font-size: 19px;margin-top: 80%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 33%; color: #3cb300;">FUNKCJE AGREGUJĄCE</h1>
        
<?php

require_once("../ASSETS/connect.php");

    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial</h3>");
    $result = $conn -> query('SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>MAKSIMUM</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["Maksimum"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial</h3>");
    $result = $conn -> query('SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>CAŁOŚĆ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["Dzial"]. "</td><td>" .$row["Całość"]. "</td><td>" .$row["Średnia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial</h3>");
    $result = $conn -> query('SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial');
        echo("<table style='margin-left: 5%;' border=1>");
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
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>4. SELECT Dzial, Avg(zarobki) AS AVG FROM pracownicy GROUP BY dzial HAVING Avg(zarobki)<36</h3>");
    $result = $conn -> query('SELECT Dzial, Avg(zarobki) AS AVG FROM pracownicy GROUP BY dzial HAVING Avg(zarobki)<36');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>Dzial</th>");
        echo("<th>AVG</th>");
            while($row = $result -> fetch_assoc()){                                                                                                    
                echo("<tr>");
                    echo("<td>" .$row["Dzial"]. "</td><td>" .$row["AVG"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
     </div>
  </body>
</html>
