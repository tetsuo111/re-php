<?php

session_start();
require_once'header_message.php';



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>アンケート</title>
</head>
<body>
アンケートにお答えください。
<br>
<form action = "check_question.php" method = "post">
この本の購入日を教えてください<br>
<input type = "text" name = "pdate" value = "<?php echo date('Y/m/d'); ?>";>
<br><br>
一ヶ月あたりの書籍の平均購入額を教えてください<br>
<input type = "text" name = "pprice" value = "5000">円
<br><br>
本書の評価を教えてください。<br>
<input type = "radio" name = "star" value = "5">5:とてもいい
<input type = "radio" name = "star" value = "4">4:いい
<input type = "radio" name = "star" value = "3">3:ふつう
<input type = "radio" name = "star" value = "2">2:わるい
<input type = "radio" name = "star" value = "1">1:さいあく
<br><br>
興味のある言語を教えてください(複数選択可)<br>
<input type = "checkbox" name = "lang[0]" value = "PHP">PHP
<input type = "checkbox" name = "lang[1]" value = "Perl">Perl
<input type = "checkbox" name = "lang[2]" value = "Java">Java
<input type = "checkbox" name = "lang[3]" value = "C#">C#
<input type = "checkbox" name = "lang[4]" value = "C++">C++
<input type = "checkbox" name = "lang[5]" value = "Basic">Basic
<br><br>
あなたの職種を教えてください<br>
<select name = "job">
<option value = "プログラマー">プログラマー
<option value = "コンサルタント">コンサルタント
<option value = "研究職">研究職
<option value = "その他">その他
</select>
<br><br>
<input type = "submit" value = "アンケートを確認する">
</form>

</body>
</html>