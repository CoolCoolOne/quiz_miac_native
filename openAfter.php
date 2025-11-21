<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
</head>

<body>



    <?php
    require_once './connect.php';


    if (isset($_GET['open'])) {
        if ($_GET['open'] == '1') {
            $sql = "UPDATE nextStage SET openAfter = 1 WHERE id = 1;";
            $pdo->exec($sql);
            header("Location: ./new_view/result_after.php");
            exit;
        } else {
            $sql = "UPDATE nextStage SET openAfter = 0 WHERE id = 1;";
            $pdo->exec($sql);
        }
        header("Location: ./index.php");
        exit;
    }


    ?>

    <hr>
    <h2><a href="./openAfter.php?open=1">Открыть вторую попытку</a>
        <br><br>
        <a href="./openAfter.php?open=0">Закрыть вторую попытку</a>
        <br><br><br>
        <a href="./result.php">Посмотреть результаты первой попытки</a>
        <br>

        <a href="./result_after.php">Посмотреть результаты второй попытки</a>
        <br>
        <hr>
        <a href="./new_view/result.php">Результаты первой попытки (новый вид)</a>
        <br>

        <a href="./new_view/result_after.php">Результаты второй попытки (новый вид)</a>
        <br>
        <hr>
        <h3><a href="./index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
        <img width="20%" src="./qr-code.png" alt="qr-code">
        <hr>

        <h3><a href="./del_result.php">Сбросить голоса</a></h3>
    </h2>

</body>

</html>