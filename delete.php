<?php
  include_once('./dbconnect.php');

  $id = $_GET['id'];

  //var_dump($id);

  $sql = "DELETE FROM records WHERE id = :id";

  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(';id',$id, PDO::PARAM_INT);
  $stmt->execute();


  



?>