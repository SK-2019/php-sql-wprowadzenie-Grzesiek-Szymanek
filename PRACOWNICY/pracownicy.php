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
        <h1 style="font-size: 19px;margin-top: 300%;text-align: center;">Autor: Grzesiek Szymanek</h1>
    </div>
    </div>
    <div class="item colorGreen">
        <h1 style="margin-left: 40.5%; color: #3cb300;">PRACOWNICY</h1>

    <?php

    require_once("../ASSETS/connect.php");

    echo("<h3 style='margin-top: 60px; margin-left: 5%;'>0. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)</h3>");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 60px; margin-left: 5%;'>1. SELECT * FROM pracownicy WHERE dzial=2</h3>");
    $result=$conn->query('SELECT * FROM pracownicy WHERE dzial=2');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 60px; margin-left: 5%;'>2. SELECT * FROM pracownicy WHERE (dzial=2 or dzial=3)</h3>");
    $result=$conn->query('SELECT * FROM pracownicy WHERE (dzial=2 or dzial=3)');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 60px; margin-left: 5%;'>3. SELECT * FROM pracownicy WHERE (zarobki<30)</h3>");
    $result=$conn->query('SELECT * FROM pracownicy WHERE (zarobki<30)');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
    </div>
</body>
</html>
