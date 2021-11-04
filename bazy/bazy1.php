<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost","root","","4c_gr1_baza1"); //serwer, użytkownik, haslo, nazwa bazy
      $sql = "SELECT * FROM `users`";
      //connect - przechowuje identyfikator połączenia
      $result = $connect->query($sql); //obiekt
      //fetch_assoc pobiera pierwszy wiersz i zamienia na tablice asocacyjna
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
         Id: $row[id]<br>
         Imie: $row[name]<br>
         Nazwisko: $row[surname]<br>
         Data urodzenia: $row[birthday]<hr>
ROW;
      }

      $connect->close(); //zamknięcie połączenia
     ?>
  </body>
</html>
