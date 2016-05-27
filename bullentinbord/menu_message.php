<?php

require_once 'check_login_message.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>掲示板</title>
</head>
<body>
  Login:<b><?php echo $_SESSION['name'];?></b>
  <hr>
  <a href = "logout.php">ログアウト</a>
  <hr>
  <p>掲示板システムメニュー</p>
  <ul>
    <li>自己紹介ページ(未実装)</li>
    <li><a href = "write_message.php">メッセージを書く</a></li>
    <li>メッセージを他人に送る(未実装)</li>
    <li><a href = "show_message.php">メッセージを読む</a></li>
    <li><a href="../gazou/uploads_form.php">画像投稿</a></li>
    <li><a href = "../ancate_app/question_form.php">アンケートを投稿する</a></li>
    <li><a href = "../search/search_form.php">検索フォームへ移動する</a></li>
    <li>アルゴリズム練習ページ(未実装)</li>
    <li>登録内容の変更(未実装)</li>
    <li>退会処理(未実装)</li>
    <li><a href="../mail_form/inquiry.php">お問い合わせ</a></li>

  </ul>

</body>
</html>