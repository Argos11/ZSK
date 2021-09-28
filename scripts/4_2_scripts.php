<?php
//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
  if(!empty($_POST['imie']) && !empty($_POST['geometry'])){
    echo 'ok';
    switch ($_POST['geometry']) {
      case 'kwadrat':
        echo "kwadrat"
        break;
      case 'prostokat'
        echo 'prostokąt'
        break;
    }
  }else{
    ?>
    <script>
      history.back();
    </script>
    <?php
  }
?>
