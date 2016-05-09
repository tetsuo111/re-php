<?php
session_start();
require_once '../bullentinbord//header_message.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title>画像一覧</title>
</head>
<body>
<?php
//保存先ディレクトリ 1
$dir   = 'uploads/';
$dir_s = 'uploads/s/';
//ディレクトリ内のファイルを取り出す 2
$files = scandir($dir_s);
//ファイル数を取り出す 3
$count = count($files);

?>
画像一覧
<br>
<table border="0">
<?php
//列の位置　1
$col = 0;
//ファイルの取り出し 4　
for ($i = 0; $i < $count; $i++) {
	//ファイル情報を取り出す　5
	$file = pathinfo($files[$i]);
	//ファイル名
	$file_name = $file['basename'];
	//ファイルの拡張子
	$file_ext = $file['extension'];

	//JPEG形式のファイルを表示する 6
	if ($file_ext === 'jpeg' || $file_ext === 'jpg') {
		//列の加算　2
		$col++;
		//先頭ならばTRタグ開始
		if ($col === 1) {
			echo '<tr valign = "top">';
		}

		//TDタグ開始
		echo '<td bgcolor = "#EEEEEE">';
		//ファイル名の表示
		echo $file_name;
		echo '<br>';
		//リンク、画像の表示
		echo '<a href = "'.$dir.$file_name.'"target = "_blank"><img src = "'.$dir_s.$file_name.'"></a>';
		//TDタグ終わり
		echo '</td>';

		//5列目ならばTRタグ終わり、列位置を0に戻す　3
		if ($col === 5) {
			echo '</tr>';
			$col = 0;
		}
	}
}
//列の残りを埋める 4
if ($col > 0) {
	echo '<td colspan = "'.(5-$col).'" bgcolor = "#CCCCCC"></td></tr>';
}

?>

</table>
</body>
</html>