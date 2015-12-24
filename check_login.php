<?php 
//ユーザー名　パスワード
//セッションの生成
session_start();

$user = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$pass = htmlspecialchars($_POST['email'] , ENT_QUOTES);

//認証
if(($user === 'login_name') && ($pass ==='login_email')){
  //ログイン成功
  $login = 'OK';
}else{
  $login = 'Error';
}

//セッション変数に記録 2
$_SESSION['login'] = $login;




//移動
if($login === 'OK'){
  //ログイン成功; ログイン成功画面へ
  header('Location: ok_login.php');
}else{
  //ログイン失敗:ログインフォーム画面へ
  header('Location: login.php');
}


?>