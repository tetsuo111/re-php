<?php

require_once '../sql/mysql_info.php';
require_once 'check_login_message.php';

if (isset($_POST['title']) || isset($_POST['message'])) {

	//タイトル、メッセージ
	$title   = htmlspecialchars($_POST['title'], ENT_QUOTES);
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
}

if ($conn) {
	//データベースの選択
	mysqli_select_db($conn, $db_name);
	//文字化け対策
	mysqli_query($conn, 'SET NAMES utf8');
	//データベースからの取り出しSQL文
	$sql = 'SELECT message_id , message_title , message , user_name , entry_date FROM message_tb ORDER BY message_id';
	//SQL文の実行
	$query = mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>掲示板</title>
</head>
<body>

<?php
require_once 'header_message.php';

?>
メッセージ一覧<br>
  <table border = 1>
  <tr bgcolor = "#CCCCCC">
    <td>ID</td>
    <td>タイトル</td>
    <td>メッセージ</td>
    <td>ユーザー</td>
    <td>登録日</td>
  </tr>
<?php
//データの取り出し
while ($row = mysqli_fetch_object($query)) {
	echo '<tr>';
	echo '<td>'.$row->message_id.'</td>';
	echo '<td>'.$row->message_title.'</td>';
	echo '<td>'.nl2br($row->message).'</td>';
	echo '<td>'.$row->user_name.'</td>';
	echo '<td>'.$row->entry_date.'</td>';
	echo '</tr>';
}

?>
  </table>
</body>
</html>