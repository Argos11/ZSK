<?php
if (!empty($_GET['id'])) {
  require_once './connect.php';
  $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
  $connect->query($sql);
  $id = $_GET['id'];
  if ($connect->affected_rows) {
    header("location: ../bazy3.php?error=0&info='usunieto rekord o id=$id'");
    echo $connect->affected_rows;

  }else {
    header("location: ../bazy3.php?error=1&info='nie usunieto rekordu'");
  }

}else {
  header('location: ../bazy3.php');
}
?>
