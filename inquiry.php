<?php

require_once 'mysql_info.php';

session_start();
if ($_SESSION['login'] !== 'OK') {
	header('Location: login.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<meta charset = "UTF8">
<head>
  <title>お問い合わせフォーム</title>
</head>
<body>
お問い合わせ内容を入力してください
<br>
<form action ="check_inquiry.php" method = "post">
<br>
氏名:<?php echo $_SESSION['name'];?>
<br>
<!--
<input type = "text" name = "your_name" size = "30">
-->
<br>
お問い合わせタイトル:
<br>
<input type = "text" name = "title" size = "50">
<br>
<br>
お問い合わせ内容詳細:
<br>
<textarea name="message" cols = "40" rows = "5"></textarea>
<br>
<br>
<input type = "submit" value = "お問い合わせ内容の確認">
</form>


</body>
</html>