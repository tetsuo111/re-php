<?php

require_once '../sql/mysql_info.php';
//ログインチェック
require_once 'check_login_message.php';

//タイトル、メッセージ
$title   = htmlspecialchars($_POST['title'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

if ($conn) {
	//データベースの接続
	mysqli_select_db($conn, $db_name);
	//データベースへ書き込むSQL文
	mysqli_query($conn, 'SET NAMES utf8');
	$sql = 'INSERT INTO message_tb(message_title , message ,user_name) VALUES ("'.$title.'" , "'.$message.'" , "'.$_SESSION['name'].'" )';
	//SQL文実行
	$query = mysqli_query($conn, $sql);

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>掲示板</title>
</head>
<body>
<?php require_once 'header_message.php';?>
メッセージを登録しました<br>
  <br><br>
  <a href = "show_message.php">メッセージを読む</a>
</body>
</html>

