<?php
  echo PHP_VERSION, "<br>";
  echo 2**10, "<br>";

  $x=1;
  $y=10;
  echo $x<=>$y, "<br>";

  //równe
    $x=1;
    $y=1.0;

    echo gettype($x), "<br>";
    echo gettype($y), "<br>";

    if ($x==$y){
        echo "Równe", "<br>";
      }else{
        echo "Różne", "<br>";
      }

  //identycnze
      if ($x===$y){
          echo "Identyczne", "<br>";
        }else{
          echo "Różne", "<br>";
        }

  /*
  preinkrementacja ++$
  postimkrementacja $++
  predekrementacja --$
  postdekrementacja $--
  */

  $x=10;
  $x=++$x;
  //echo $x;
  $x=$x++;


  $x=1;
  echo $x, "<br>"; //1
  $x=$x++;
  echo $x, "<br>";//1
  $x=++$x;
  echo $x, "<br>";//2
  $y=++$x;
  echo $x, "<br>";//3
  echo $y, "<br>";//3
  $y=$x++;
  echo $x, "<br>";//4
  echo $y, "<br>";//3

  

 ?>
