<?php
session_start();
require_once'header_message.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
  <title>画像ファイル</title>
</head>
<body>
アップロードする画像ファイル(JPEG形式)を入力してください。
<br>
<form action="upload_image.php" method="post" enctype="multipart/form-data">
  画像ファイル:
<br>
<input type = "file" name = "filename" size= "50">
<br>

<br>
<input type = "submit" value = "アップロード">
</form>
<br>
  <a href = "show_image.php">一覧を表示</a>


</body>
</html>