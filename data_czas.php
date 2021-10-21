<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Czas</title>
  </head>
  <body>
    <?php
     echo "dzień-miesiąc-rok: ".date('d-m-y').'<br>'; //21-10-2021
     echo date('m-d-y').'<br>'; //10-21-21
     echo date('m-M-Y').'r.<br>'; //10-Oct-2021r.
     echo date('m-F-Y').'r.<br>'; //10-October-2021r.

     setlocale(LC_ALL, 'PL'); //21 pazdziernik 2021
     echo strftime('%d %B %Y').'<br>';

     echo date('G:i:s');
     echo date('G:i:sa');
     echo date('H:i:s');
     ?>
     <script>
      setTimeout(function(){
        //window.location.reload()
      }, 1000);
     </script>
     <?php

      //getdate()

      $date=getdate();
      echo "<pre>";
        print_r($date);
      echo "</pre>";

      echo $date['wday'].'<br>';
      echo $date['yday'].'<br>';

      //rok przestępny

      echo date("L").'<br>'; // 0 - rok nie przestępny

      //mktime

      $today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
      echo $today.'<br>';

      //lata od 1 stycznia 1970
      $year = $today/(60*60*24*365);
      echo (int)$year.'<br>';

      $lastMonth = mktime(0, 0, 0, date("m"), date("d"),   date("Y")-1);
      echo $lastMonth.'<br>';
      $year1 = $lastMonth/(60*60*24*365);
      echo (int)$year1.'<br>';

      ?>
</body>
</html>
