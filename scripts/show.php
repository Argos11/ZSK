<?php
 require_once('../functions/function.php');
 show();
 echo show1();
 if (!empty($_POST['name'])){
   echo "<hr>Podane imie: ".showname($_POST['name']);
 }
 echo "<br>".stringvalidate("AAaaa", 5);
?>
