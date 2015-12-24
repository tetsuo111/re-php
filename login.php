<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset = utf8">
<head>
  <link rel="stylesheet" href="login.css" type="text/css" />
  <title>ログイン画面</title>
</head>
<body>


<div id = "form-main">
  <div id = "form-div">
  <form class = "form" id = "form1" action = "check_login.php" method = "post">
    <p class = "name">
      <input name = "name"  type = "text" class ="validate[required,custom[onlyLetter],length[0,100]] feedback-input"  placeholder="Name" id="name" >
    </p>
    <p class="email">
      <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
    </p>
    <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
    </div>
  </form>
</div>




</body>
</html>