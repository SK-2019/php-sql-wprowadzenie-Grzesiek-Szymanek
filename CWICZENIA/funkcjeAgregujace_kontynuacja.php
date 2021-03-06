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
           <h1 style="font-size: 19px;margin-top: 195%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 19%; color: #3cb300;">KONTYNUACJA FUNKCJI AGREGUJĄCYCH</h1>
        
<?php
  
require_once("../ASSETS/connect.php");

    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT SUM(zarobki) AS SUMA FROM pracownicy</h3>");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy');
          echo("<table style='margin-left: 5%;' border=1>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["SUMA"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie like '%a')</h3>");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie like "%a")');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie not like '%a') AND (dzial=2 OR dzial=3)</h3>");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie not like "%a") AND (dzial=2 OR dzial=3)');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>4. SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like '%a') </h3>");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a")');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>5. SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy WHERE (dzial=4) GROUP BY dzial LIMIT 1</h3>");
    $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy WHERE (dzial=4) GROUP BY dzial LIMIT 1');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>6. SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like '%a') AND (dzial=1 OR dzial=2)</h3>");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>7. SELECT COUNT(imie) AS ilosc FROM pracownicy</h3>");
    $result = $conn -> query('SELECT COUNT(imie) AS ilosc FROM pracownicy');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>ILOŚĆ</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px; margin-left: 5%;'>8. SELECT COUNT(imie) AS ilosc FROM pracownicy WHERE (imie like '%a') AND (dzial=1 OR dzial=3)</h3>");
    $result = $conn -> query('SELECT COUNT(imie) AS ilosc FROM pracownicy WHERE (imie like "%a") AND (dzial=1 OR dzial=3)');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>ILOŚĆ</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
        
     </div>
  </body>
</html>
