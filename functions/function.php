<?php
  function show(){
    echo "test";
  }
  function show1(){
    return;
  }

  function showname($name){
    return $name;
  }

  //zdefiniuj funkcje o nazwie stringvalidate, ktora wykona nastepujace dzialania
//  1.usunie biale znaki
//  2.zamieni pierwsza litere na duza
//  3.od drugiej litery male
//  4.drugi parametr bedzie okreslac dlugosc stringa

 function stringvalidate($name, $long){
   $name = trim($name);
   $name = strtolower($name);
   $name = ucfirst($name);
   $name = substr($name, 0, $long);
   return $name;
 }
 ?>
