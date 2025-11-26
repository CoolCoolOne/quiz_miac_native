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

    if (isset($_GET['del'])) {
        if ($_GET['del'] == '1') {
            $sql = "TRUNCATE TABLE answer1_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer1_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer1_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer1_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE answer2_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer2_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer2_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer2_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE answer3_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer3_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer3_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer3_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE answer4_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer4_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer4_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer4_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE answer5_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer5_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer5_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE answer5_4";
            $pdo->exec($sql);

            // ..

            $sql = "TRUNCATE TABLE a_answer1_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer1_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer1_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer1_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE a_answer2_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer2_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer2_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer2_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE a_answer3_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer3_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer3_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer3_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE a_answer4_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer4_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer4_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer4_4";
            $pdo->exec($sql);

            $sql = "TRUNCATE TABLE a_answer5_1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer5_2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer5_3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE a_answer5_4";
            $pdo->exec($sql);

        }
    }

    echo 'Для удаления всех голосов нажмите:' . '<br><br>';

  
    ?>

<hr>

<a href="./del_result.php?del=1">Удалить голоса</a>
<br>
<a href="./ajax_view/result.php">Вернуться к результатам</a>

</body>

</html>