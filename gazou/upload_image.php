<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>画像ファイルアップローダー</title>
</head>
<body>
<?php
//ファイル名の取り出し
$file_name = $_FILES['filename']['name'];
//ファイルタイプの取り出し
$file_type = $_FILES['filename']['type'];
//一時ファイル名の取り出し 
$temp_name = $_FILES['filename']['tmp_name'];


//保存先のディレクトリ 1
$dir = 'uploads/';
//保存先のファイル名
$upload_name = $dir.$file_name;
//サムネイル画像の保存先のディレクトリ 1
$dir_s = 'uploads/s/';
//サムネイル画像の保存先のファイル名　
$upload_name_s = $dir_s.$file_name;



//JPEG形式のファイルをアップロードする 2 
if(($file_type === 'image/jpeg') || ($file_type === 'image/pjpeg')){
  //アップロード(移動) 3 第一引数に一時ファイル名、第二引数に保存先ファイル名
  //ファイルの移動と名前の付け替え
  $result = move_uploaded_file($temp_name , $upload_name);

  if($result){
    //アップロード成功
    echo 'アップロード成功';
    //アップロードされた画像情報を取り出す 1 getimagesizeは画像ファイルの情報を取り出す
    $image_size = getimagesize($upload_name);
    //アップロードされた画像の幅と高さを取り出す
    $width = $image_size[0];
    $height = $image_size[1];

    //サムネイル画像の幅と高さを決める　2
    $width_s = 120;
    $height_s = round($width_s * $height / $width);

    //アップロードされた画像を取り出す　3　
    $image = imagecreatefromjpeg($upload_name);
    //サムネイルの大きさの画像を新規登録 4
    $image_s = imagecreatetruecolor($width_s,$height_s);
    //アップロードされた画像からサムネイル画像を作成　5　
    $result_s = imagecopyresampled($image_s, $image, 0, 0, 0, 0,$width_s,$height_s,$width, $height);

    if($result_s){
      //サムネイル画像作成成功
      //サムネイル画像の保存　6　
      if(imagejpeg($image_s , $upload_name_s)){
        echo '->サムネイル画像保存';
      }else{
        echo '->サムネイル画像作成失敗';
      }
    }
    //画像の破棄　7
    imagedestroy($image);
    imagedestroy($image_s);

  }else{
    echo 'アップロード失敗';
  }
}else{
  //JPEG形式以外のファイルはアップロードしない
  echo 'JPEG形式の画像をアップロードしてください';
}

?>
<br>
<br>
<!--  2 -->
画像ファイル:<?php echo $upload_name. '('.$width.'X'.$height.')'; ?>
<br>
<img src = "<?php echo $upload_name; ?>">
<br>
<br>
サムネイル:<?php echo $upload_name_s . '('.$width_s.'X'.$height_s.')'; ?>
<br>
<img src = "<?php echo $upload_name_s; ?>">

</body>
</html>