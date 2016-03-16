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
<?php

$pdate = htmlspecialchars($_POST['pdate'] , ENT_QUOTES);

$pprice = htmlspecialchars($_POST['pprice'] , ENT_QUOTES);

$star = htmlspecialchars($_POST['star'] , ENT_QUOTES);

$ver = array();
for($i = 0; $i < 7; $i++){
  if(isset($_POST['lang'][$i])){
    $lang[$i] = htmlspecialchars($_POST['lang'][$i] ,ENT_QUOTES);
    $ver[$i] = $lang[$i];
  }
}


$job = htmlspecialchars($_POST['job'] , ENT_QUOTES);
?>

<body>
アンケートの内容を確認してください
<br>
この本の購入日を教えてください<br>

<?php

$pdate = mb_convert_kana($pdate , 'a' , 'UTF-8');

list($year , $month , $day) = explode('/' , $pdate);

if(checkdate($month , $day , $year)){
  echo $pdate;
}else{
  echo $pdate . '(日付に謝りがある)';
}
?>
<br><br>
一ヶ月あたりの書籍の平均購入額をおしえてください<br>
<?php
$pprice = mb_convert_kana($pprice , 'a' , 'UTF-8');

if(is_numeric($pprice)){
  echo $pprice . '円';
} else{
  echo $price . '円(数値ではありません)';
}

?>
<br><br>
本書の評価を教えてください(五段階)<br>
<?php echo $star; ?>
<br><br>
興味のある言語を教えてください(複数選択可)<br>
<?php
  for($i = 0; $i  < 7; $i++){
    //チェックされているもののみ表示
    if(isset($lang[$i])){
      echo '['.$lang[$i].']';
    }
  }
?>

<br><br>
あなたの職種を教えてください<br>
<?php echo $job; ?>

<br><br>
<form action = "write_question.php" method = "POST">
<input type = "hidden" name = "pdate" value = "<?php echo $pdate; ?>">
<input type = "hidden" name ="pprice" value = "<?php echo $pprice; ?>">
<input type = "hidden" name = "star" value  = "<?php echo $star; ?>">
<?php 
  for($i = 0; $i < 7; $i++){
    if(isset($lang[$i])){
      echo '<input type = "hidden" name = "lang[.$i.]" value = "'.$lang[$i].'">';
    }
  }
?>
<input type = "hidden" name = "job" value = "<?php echo $job; ?>">
<br><br>
<input type = "submit" value = "アンケートを送信する">

</form>
</body>
</html>

