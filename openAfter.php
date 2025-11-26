<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            text-align: center;
            padding: 20px;
        }

        /* Общие стили для всех кнопок */
        .button {
            display: inline-block;
            /* Позволяет задавать ширину, высоту и отступы */
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            /* Убирает подчеркивание */
            border-radius: 8px;
            margin: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Плавные переходы */
        }

        /* Стили для основной кнопки */
        .button-main {
            background-color: #4caf50;
            /* Зеленый цвет */
            color: white;
            border: 2px solid #4caf50;
        }

        .button-main:hover {
            background-color: #43a047;
            /* Цвет при наведении */
            transform: translateY(-2px);
            /* Эффект "подъема" */
        }

        /* Стили для красной кнопки (сброс) */
        .button-red {
            background-color: #f44336;
            /* Красный цвет */
            color: white;
            border: 2px solid #f44336;
        }

        .button-red:hover {
            background-color: #e53935;
            /* Цвет при наведении */
            transform: translateY(-2px);
            /* Эффект "подъема" */
        }

        /* Стили для информационных кнопок */
        .button-info {
            background-color: #2196f3;
            /* Синий цвет */
            color: white;
            border: 2px solid #2196f3;
        }

        .button-info:hover {
            background-color: #1e88e5;
            /* Цвет при наведении */
            transform: translateY(-2px);
            /* Эффект "подъема" */
        }

        /* Дополнительные стили для улучшения внешнего вида */
        h2,
        h3 {
            color: #555;
        }

        hr {
            border: 1px solid #ccc;
            margin: 20px 0;
        }
    </style>
</head>

<body>

    <?php
    require_once './connect.php';

    if (isset($_GET['open'])) {
        if ($_GET['open'] == '1') {
            $sql = "UPDATE nextStage SET openAfter = 1 WHERE id = 1;";
            $pdo->exec($sql);
            header("Location: ./ajax_view/result_after.php");
            exit;
        } else {
            $sql = "UPDATE nextStage SET openAfter = 0 WHERE id = 1;";
            $pdo->exec($sql);
        }
        header("Location: ./index.php");
        exit;
    }




    ?>


    <h2>
        <a class="button button-main" href="./openAfter.php?open=1">Открыть вторую попытку (закрыть первую)</a>
        <br>
        <a class="button button-red" href="./openAfter.php?open=0">Закрыть вторую попытку (открыть первую)</a>
        <br>
        <hr>
        <a class="button button-info" href="./ajax_view/result.php">Результаты попытки #1 (с автообновлением)</a>
        <br>
        <a class="button button-info" href="./ajax_view/result_after.php">Результаты попытки #2 (с
            автообновлением)</a>
        <hr>
        <h3>
            <a href="./index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a>
        </h3>
        <img width="20%" src="./qr-code.png" alt="qr-code">
        <hr>
        <h3>
            <a class="button button-red" href="./del_result.php">Сбросить голоса</a>
        </h3>
    </h2>

</body>

</html>