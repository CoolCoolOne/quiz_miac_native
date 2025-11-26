<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico"><!-- 32×32 -->
  <title>Опрос</title>

  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        color: #333;
        padding: 10px;
    }
    
    /* Общие стили для кнопок-ссылок */
    .button-start {
        display: block; /* Делаем кнопку блочной, чтобы она занимала всю доступную ширину */
        max-width: 80%; /* Оставляем ограничение ширины из вашего кода */
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none; /* Убирает подчеркивание */
        border-radius: 8px;
        margin-top: 10px;
        margin-bottom: 10px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        color: black; /* Цвет текста черный, как вы просили */
        text-align: center; /* Центрируем текст внутри кнопки */
    }

    /* Стиль для первой попытки (зеленый) */
    .button-green {
        background-color: rgb(127, 255, 185);
        border: 1px solid rgb(100, 200, 150);
    }
    
    .button-green:hover {
        background-color: rgb(100, 200, 150);
        transform: translateY(-2px);
    }

    /* Стиль для второй попытки (оранжевый/красный) */
    .button-orange {
        background-color: rgba(255, 157, 127, 1);
        border: 1px solid rgba(200, 120, 90, 1);
    }
    .radius1 {

        border-radius: 15px;
    }

    .button-orange:hover {
        background-color: rgba(200, 120, 90, 1);
        transform: translateY(-2px);
    }

    /* Стили для обычных ссылок */
    a {
        color: #007bff;
        text-decoration: none;
    }
    
    a:hover {
        text-decoration: underline;
    }
    
    hr {
        border: 1px solid #ccc;
        margin: 20px 0;
    }

  </style>

</head>

<body>
  <img width="400px" src="./logo.png" alt="логотипс" class="radius1">
  <h3>Блиц-опрос 27.11.2025 (3 вопроса)</h3>
  <br>

  <?php
  require_once './connect.php';
  $sql = "SELECT openAfter FROM nextStage WHERE id = 1;";
  $openAfter = $pdo->query($sql);
  $openAfter = $openAfter->fetch(PDO::FETCH_ASSOC);

  if ($openAfter['openAfter'] == 0) {
    // Используем стилизованную кнопку button-green
    echo '<a class="button-start button-green" href="./before/oneQ.php">';
    echo '<h3>Начать отвечать</h3>';
    echo '</a>';

  } else {
    // Используем стилизованную кнопку button-orange
    echo '<a class="button-start button-orange" href="./after/oneQ.php">';
    echo '<h3>Начать отвечать (2 попытка)</h3>';
    echo '</a>';
  }
  ?>


  <?php ?>


  <hr>
  <h4>Эта страница доступна по ссылке <a href="./index.php">miac.nnov.ru/quiz</a> или по QR:</h4>
  <img width="40%" src="./qr-code.png" alt="qr-code" class="radius1">
  <hr>

    <h3><a href="./index.php">Обновить страницу</a></h3>

    <hr>
</body>

</html>
