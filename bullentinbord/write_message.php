<?php

//ログインチェック
require_once 'check_login_message.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>掲示板</title>
</head>
<body>
  Login:<b><?php echo $_SESSION['name'];?></b>
  <hr>
  <a href = "menu_message.php">メニュー</a>
  <a href="logout.php">ログアウト</a>
  <hr>
  メッセージを入力してください<br>
<form action = "insert_message.php" method = "POST">
  タイトル:<br>
  <input type = "text" name = "title" size = "50">
  <br><br>
  メッセージ:<br>
  <textarea name="message" cols = "40" rows = "5"></textarea>
  <br><br>
  <input type = "submit" value = "メッセージを登録">
</form>

  </body>
  </html>
