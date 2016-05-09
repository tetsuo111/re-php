<?php

//ユーザー名　パスワード
//セッションの生成
session_start();

require_once '../sql/mysql_info.php';

$user  = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);

if ($conn) {
	//データベースの選択
	mysqli_select_db($conn, $db_name);
	mysqli_query($conn, 'SET NAMES utf8');

	//$sql1 = 'SELECT login_name , mailaddress , user_name FROM user_tb WHERE login_name = "'.$user.'" AND mailaddress = "''"';

	//データベースの問い合わせ
	$sql = 'SELECT user_name FROM user_tb WHERE login_name = "'.$user.'" AND mailaddress = "'.$email.'"';

	//sql文の実行
	$query = mysqli_query($conn, $sql);
}

//認証　取り出したデータ件数を調べる　
if (mysqli_num_rows($query) === 1) {
	//ログイン成功
	$login = 'OK';
	//データの取り出し
	$row = mysqli_fetch_object($query);
	//表示用ユーザー名をセッション変数に保存
	$_SESSION['name']  = $row->user_name;
	$_SESSION['email'] = $_POST['email'];
} else {
	$login = 'Error';
}

//セッション変数に記録
$_SESSION['login'] = $login;

//移動
if ($login === 'OK') {
	//ログイン成功
	header('Location: menu_message.php');
} else {
	//ログイン失敗:ログインフォーム画面へ
	header('Location:failed_login.php');
}

?>