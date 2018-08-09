<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>8-2</title>
  </head>
  <body>
    <?php
    echo "사용자 입력값 중 password의 값:  ";
    $ID = $_GET["ID"];
    $password = $_GET["password"];
    echo $ID . "님 반갑습니다. ";
    if($password == "1111"){
      echo "welcome!! WElcome very welcome!";
    } else {
      echo "그런데, 잘못된 PW를 넣으셨네요. byebye ";
    }
    ?>

  </body>
</html>
