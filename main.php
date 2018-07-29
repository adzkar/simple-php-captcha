<?php
  require_once __DIR__.'/vendor/autoload.php';
  use App\Session;
  $ses = new Session;
  echo $_SESSION['captcha'];
  if(isset($_POST['propose']))
    echo ($ses->checkCaptcha($_POST['captcha']) === true) ? "True":"False";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <img src="captcha.php" alt="Captcha">
  <form action="" method="post">
    <input type="text" name="captcha" placeholder="Enter The Captcha">
    <button type="submit" name="propose">Submit</button>
  </form>
</body>
</html>
