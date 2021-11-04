<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <style>
        table, th, td {border: 1px solid black;
          border-collapse: collapse;
          padding: 10px;
        }

        th { background-color: bisque;}
      </style>
  </head>

  <body>
    <h4>Użytkownicy</h4>
    <?php
    // $connect = new mysqli("localhost","root", "", "zsk_4cg2_baza1");
    require_once '../skrypty/connect.php';
    //server, user, password, database name
    //przechowywany jest id polaczenia
    $sql = "SELECT * FROM `users`;";

    $result = $connect->query($sql);
    if (isset($_GET['error'])) {
      echo $_GET['info'].'<hr>';
    }

    echo <<< TABLE
    <table>
    <tr>
      <th>ID</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
    </tr>
    TABLE;
    //$row = $result-> fetch_assoc();
    // print_r($row);
    while ($row = $result-> fetch_assoc()) {
      //dopoki posiada rekordy
      // Id: $row[id]<br>
      // Imię i nazwisko: $row[name] $row[surname]<br>
      // Data urodzenia: $row[birthday]<hr>

      echo <<< ROW
      <tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[surname]</td>
      <td>$row[birthday]</td>
      <td><a href="../skrypty/delete.php?id=$row[id]">Usuń</a></td>
      </tr>
      ROW;
    }
    echo "</table>";
    $connect->close();
     ?>
  </body>
</html>
