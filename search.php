<?php
/*
preg_match()関数
指定した文字列があるかどうかを探してくれる。また、ワイルドカードを使用して
いろいろ検索方法を変えてみること
 */

session_start();
require_once 'mysql_info.php';
require_once 'header_message.php';

$user_name     = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
$message_title = htmlspecialchars($_POST['message_title'], ENT_QUOTES);

if ($_POST['user_name'] && $_POST['message_title']) {
	if ($conn) {
		mysqli_select_db($conn, $db_name);
		mysqli_query($conn, 'SET NAMES utf8');

		$sql = "SELECT user_name , message_title FROM message_tb WHERE user_name LIKE '%{$user_name}%'";
		$sql .= "and message_title LIKE '%{$message_title}%'";
		$query = mysqli_query($conn, $sql);

		echo "<table border = 1>";
		echo "<tr><td>名前</td><td>メッセージタイトル</td></tr>";
		while ($row = mysqli_fetch_array($query)) {

			echo "<tr>";
			echo "<td>".$row["user_name"]."</td>";
			echo "<td>".$row["message_title"]."</td>";
			echo "</tr>";

		}
		echo "</table>";
		mysqli_free_result($query);
		mysqli_close($conn);
	}
} else {
	echo "該当する文字が入ってません。または、何も入ってません";
}

?>


