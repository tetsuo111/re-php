<?php
//セッション開始
session_start();

//セッション変数を初期化
$_SESSION = array();

//セッションIDを破壊
if(isset($_COOKIE[session_name()])){
  setcookie(session_name() , '' , time() -3600 , '/');
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>ログアウト</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
まだログアウトしていません<br>
<br>
セッション情報($_SESSION) :
<pre>
<?php
///セッション開始
session_start();



//$_SESSIONの中身をすべて表示
  print_r($_SESSION);


?>
</pre>
</body>
</html>

