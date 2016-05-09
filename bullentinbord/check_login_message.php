<?php

session_start();

//ログインチェック
if ($_SESSION['login'] !== 'OK') {
	//ログインフォーム画面へ
	header('Location: login.php');

	/*ヒアドキュメント
	phpタグを使わずそのままの文字列、htmlを出力する

	 */

	echo <<< EOT
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8";
  <title>掲示板</title>
</head>
<body>
ログインしていません
<br><br>
  <a href = "login.php">ログイン画面を開く</a>

</body>
</html>
EOT
	;

	//終了
	exit();
}

?>