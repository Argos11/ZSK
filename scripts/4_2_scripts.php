<?php
//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
  if(!empty($_POST['imie']) && !empty($_POST['geometry'])){
    echo 'ok';
  }else{
    ?>
    <script>
      history.back();
    </script>
    <?php
  }
?>
