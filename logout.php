<?php
//セッション開始
session_start();

//セッション変数を初期化
$_SESSION = array();

//セッションIDを破壊
if(isset($_COOKIE[session_name()])){
  setcookie(session_name() , '' , time() -3600 , '/');
}

//セッションを破壊
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
  <title>ログアウト</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
ログアウトしました<br>
<br>
セッション情報($_SESSION) :
<pre>
<?php



//$_SESSIONの中身をすべて表示
  print_r($_SESSION);


?>
  <a href="login.php">ログインページに戻る</a>
</pre>
</body>
</html>

