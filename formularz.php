<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!--odsiwieżanie ctrl+f5-->
  <body
      <h3>Dane użytkownika</h3>
      <!-- form method="post" -->
      <form method="get">
        <input type="text" name="name" value="Janusz"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="submit" value="zatwierdź">
      </form>

      <?php
      //if(isset ($_POST['name'])){
      //echo "Imię".$_POST['name'];
      //echo "Nazwisko: ".$_POST['surname'];
      //echo <<< L
        //<hr>
        //Imię: $_POST[name]<br>
        //Nazwisko: {$_POST['surname']}
//L;
// isset ($_GET['name']) - sprawdza czy istnieje
      if(!empty ($_GET['name']) && !empty ($_GET['surname'])){ //sprawdza czy nie jest puste
      //echo "Imię".$_GET['name'];
      //echo "Nazwisko: ".$_GET['surname'];
      echo <<< L
        <hr>
        Imię: $_GET[name]<br>
        Nazwisko: $_GET[surname]
L;
}else {
  echo "Wypełnij dane!";
}


       ?>
  </body>
</html>
