<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="style.css">
  <a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
   <div class="nav">
     <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
   </div>
 <hr></hr>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>


<div class="dodawanie">
  <h2>DODAWANIE PRACOWNIKÓW</h2>
<body>
   <form action="insert.php" method="POST" style="margin-left: 80px;">
     <input type="text" name="imie" placeholder="IMIĘ"></br>
     <input type="text" name="dzial" placeholder="DZIAŁ"></br>
     <input type="text" name="zarobki" placeholder="ZAROBKI"></br>
     <input type="date" name="data_urodzenia" placeholder="DATA URODZENIA"></br>
     <input type="submit" value="DODAJ" style="margin-left: 40px;">
   </form>
</div>


<div class="odejmowanie">
  <h2>USUWANIE PRACOWNIKÓW</h2>
<body>
   <form action="delete.php" method="POST" style="margin-left: 85px;">
     <input type="text" name="id" placeholder="ID PRACOWNIKA"></br>
     <input type="submit" value="USUŃ" style="margin-left: 55px;">
   </form>
</body>
</div>


<?php
  
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table border='2' style='margin-top: 100px;margin-left: 80px;'>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
        echo("<th>DATA URODZENIA</th>");
        echo("<th>USUŃ</th>");
        
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["data_urodzenia"]. "</td>
                    
                    <td>
                    <form action='delete.php' method='POST'>
                          <input type='text' name='id' value='".$row["id_pracownicy"]."' placeholder='ID PRACOWNIKA' hidden></br>
                                    <input type='submit' value='USUŃ'>
                          </form>
                    </td>");
              
                echo("</tr>");
            }
        echo("</table>");

?>


</html>
