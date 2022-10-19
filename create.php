<?php
  //処理の流れ
  //⒈画面で入力された値を取得
  //2.PHPからMySQLへ接続
  //3.SQL文を作成して、画面で入力された値をrecordsテーブルに追加
  //4.index.phpに画面遷移する

  
  //⒈画面で入力された値を取得
  $date = $_POST['date'];
  $title = $_POST['title'];
  $amount = $_POST['amount'];
  $type = $_POST['type'];

  


?>