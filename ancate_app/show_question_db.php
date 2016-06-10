<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>アンケート</title>
</head>
<body>
<?php
function get_checked_date($date){
  $checked_date = mb_convert_kana($date , 'a' , 'UTF8');
  list($year , $month , $day)  = explode('/' , $checked_date);
  if(!checkdate($month , $day , $year)){
    $checked_date = date('Y/m/d');
  }
  return $checked_date;
}

$sdate = get_checked_date($_POST['sdate']);
$edate = get_checked_date($_POST['edate']);
$sort = htmlspecialchars($_POST['sort'] , ENT_QUOTES);


?>
アンケート結果
<br>
<table border = "1">
<tr bgcolor = "#CCCCCC">
  <td>ID</td>
  <td>購入日</td>
  <td>評価</td>
  <td>本書の評価</td>
  <td>PHP</td>
  <td>Perl</td>
  <td>JAVA</td>
  <td>C#</td>
  <td>C++</td>
  <td>Basic</td>
  <td>職業</td>
  <td>登録日</td>
</tr>

<?php
require_once'../sql/mysql_info.php';
$sql = 'SELECT question_id , purchase_date , purchase_price , star , lang_php, lang_perl , lang_java , lang_cs , lang_cpp , lang_basic , job , entry_date FROM question_tb 
  WHERE purchase_date >= "'.$sdate.'" AND purchase_date <= "'.$edate.'"';

$sql_avg = 'SELECT AVG(star) AS average FROM question_tb ';

//ソート 5
if($sort === 'date'){
  $sql = $sql . 'ORDER BY purchase_date';
}else if($sort === 'sort'){
  $sql = $sql . 'ORDER BY star';
}else{
  $sql = $sql . 'ORDER BY entry_date';
}

$query = mysqli_query($conn , $sql);
$avg_query = mysqli_query($conn , $sql_avg);

//データの取り出し
while($row = mysqli_fetch_object($query)){
  echo '<tr>';
  echo '<td>' . $row->question_id . '</td>';
  echo '<td>' . $row->purchase_date.'</td>';
  echo '<td>' . $row->purchase_price.'</td>';
  echo '<td>' . $row->star.'</td>';
  echo '<td>' . $row->lang_php.'</td>';
  echo '<td>' . $row->lang_perl.'</td>';
  echo '<td>' . $row->lang_java.'</td>'; 
  echo '<td>' . $row->lang_cs.'</td>'; 
  echo '<td>' . $row->lang_cpp.'</td>'; 
  echo '<td>' . $row->lang_basic.'</td>'; 
  echo '<td>' . $row->job.'</td>'; 
  echo '<td>' . $row->entry_date.'</td>'; 
  echo '</tr>';
}

?>
</table>
<?php
  $sql_avg = 'SELECT AVG(star) AS average FROM question_tb';
  $query_avg = mysqli_query($conn , $sql_avg);
  $row_avg = mysqli_fetch_object($query_avg);
  echo '評価平均';
  echo $row_avg->average;

?>
<br>
  <a href="../bullentinbord/menu_message.php">メニューに戻る</a>
</body>
</html>