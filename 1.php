<?php
  echo 'ZSK<br>';
  echo 'ZSK<br>';

  $name "Janusz";
  echo "<br>"."twoje imię: $name"<br>;
  //konkatenacja
  echo 'twoje imię: $name';

  //typy danych
  $prawda = true;
  $fałsz = false;
  //integer
  $całkowita = 10;
  $bin = 0b1011;
  $oct = 011;

  $hex = 0x11;
  echo $hex;
  echo gettype($hex); //integer
  echo gettype($prawda); //boolean
  $x = 10.5;
  echo gettype($x); //double
  //here doc
  $surname = "Nowak";
  //nie nalezy umieszczac spacji w etykiecie
  $x <<< ETYKIETA
    <hr>
    Anna $surname<br>
    ETYKIETA;

  echo $x;
  //nowdoc
  $surname = "Nowak";
  echo <<< 'ETYKIETA'
  <hr>
  Anna $surname<br>
  Poznań<hr>
  ETYKIETA;
  

  ?>
