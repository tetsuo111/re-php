<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>アドレス登録</title>
</head>
<body>
<?php
require_once '../sql/mysql_info.php';

if (isset($_POST['login_name']) && isset($_POST['mailaddress']) && isset($_POST['user_name'])) {
	$login_name = htmlspecialchars($_POST['login_name'], ENT_QUOTES);
	$mail       = htmlspecialchars($_POST['mailaddress'], ENT_QUOTES);
	$user_name  = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
} else {
	header('Location:login.html');
}

/*
//strposは該当する文字があるかどうかを判定するのに使う
if((strpos($mail , '@')) === false && (strpos($mail , '.') === false)){
//header('Location:sign_up_form.php');
$error_lake_mail = 'Error';
}else{
$error_lake_mail = 'True';
}
 */

mysqli_select_db($conn, $db_name);
mysqli_query($conn, 'SET NAMES utf8');

$sql = "SELECT user_name FROM user_tb WHERE login_name  like '%$login_name%'";
$sql .= "AND mailaddress like '%$mail%'";
$query = mysqli_query($conn, $sql);
$row   = mysqli_num_rows($query);

if ($row === 0) {
	$sql = "INSERT INTO user_tb(login_name , mailaddress , user_name) VALUES";
	$sql .= "('$login_name ' , '$mail' , '$user_name')";
	$query = mysqli_query($conn, $sql);
} else {//if ($error_lake_mail === 'Error' && $row !== 0    ){
	header('Location: sign_up_form.php');
}

?>
  <p>登録が完了しました</p>
  <p><a href = "login.html">ログイン画面に戻る</a></p>

</body>
</html>