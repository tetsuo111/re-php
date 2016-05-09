<?php

?>

<!DOCTYPE html>
<head>
  <meta charset ="utf8">
  <title>アンケート</title>
</head>
<?php

require_once'mysql_info.php';

$pdate = htmlspecialchars($_POST['pdate'] , ENT_QUOTES);
$pprice =htmlspecialchars($_POST['pprice'] , ENT_QUOTES);
$star = htmlspecialchars($_POST['star'], ENT_QUOTES);
$ver = array();
//興味のある言語
for($i = 0; $i < 7; $i++){
  $lang[$i] = isset($_POST['lang'][$i]) ? 0 : 1;
}

$job = htmlspecialchars($_POST['job'] , ENT_QUOTES);

$pdate = mb_convert_kana($pdate , 'a' , 'utf8');

list($year , $month , $day) = explode('/' , $pdate);

if(!checkdate($month,$day,$year)){
  $pdate = '';
}

$sql = 'INSERT INTO question_tb(purchase_date,purchase_price , star , lang_php , lang_perl,lang_java , lang_cs, lang_cpp,lang_basic,job) VALUES ("'.$pdate.'" , '.$pprice.','.$star.' , '.$lang[0].' , '.$lang[1].' , '.$lang[2].' , '.$lang[3].' , '.$lang[4].' , '.$lang[5].' , "'.$job.'") ';

$query = mysqli_query($conn , $sql);

?>


<body>
アンケートを登録しました
<br>
<br>
  <a href="query_question.php">アンケート結果</a>
</body>
</html>

