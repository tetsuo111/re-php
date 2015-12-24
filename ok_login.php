<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset  =utf8">
<head>
  <title>ログイン</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php
//ログイン確認2
if($_SESSION['login'] === 'OK'){
//ログイン成功
  echo 'ログイン中です';
  }else{
    //ログイン失敗
    echo 'ログインしていません';
  }



?>
</body>
</html>