<?php
session_start();
require_once'header_message.php';



?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP SERCH</title>
  <meta charset = "utf8">
</head>
<body bgcolor="#FFFFFF" text ="#000000">
<form   method = "post" action = "search.php">
  検索条件を指定してください<br>
  <table width = "500" border = "1" cellspacing="1" cellpadding="0">
    <tr>
    <td>ユーザー名</td>
      <td>
        <input type = "text" name = "user_name" size ="40" maxlength = "255">
      </td>
    </tr>
    <tr>
      <td>メッセージタイトル</td>
      <td>
        <input type = "text" name = "message_title" size = "40" maxlength = "255">
      </td>
    </tr>
  </table>
  <input type = "submit" name = "submit" value = "検索">
  <input type = "reset" value = "条件クリア">
  </form>

</body>
</html>