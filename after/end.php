<?php

if (isset($_POST['answer'])) {
  require_once '../connect.php';
  $time = time();


  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO a_answer5_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO a_answer5_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO a_answer5_3 (time) VALUES ('$time')";
      break;
    case '4':
      $sql = "INSERT INTO a_answer5_4 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
$pdo->exec($sql);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico"><!-- 32×32 -->
  <title>Опрос</title>
</head>
<body>
  <h2 style="margin-left: 40px;">Спасибо! Ответы приняты.</h2>
</body>
</html>