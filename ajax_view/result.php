<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../favicon.ico"><!-- 32×32 -->
        <link rel="stylesheet" href="../styles.css">
        <title>Результаты</title>


</head>

<body>
        <img width="400px" src="../logo.png" alt="логотипс">


        <?php
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

        require_once '../connect.php';

        $sql = "SELECT COUNT(id) FROM answer1_1";
        $answer1_1 = $pdo->query($sql);
        $answer1_1 = $answer1_1->fetch(PDO::FETCH_ASSOC);
        $answer1_1 = $answer1_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer1_2";
        $answer1_2 = $pdo->query($sql);
        $answer1_2 = $answer1_2->fetch(PDO::FETCH_ASSOC);
        $answer1_2 = $answer1_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer1_3";
        $answer1_3 = $pdo->query($sql);
        $answer1_3 = $answer1_3->fetch(PDO::FETCH_ASSOC);
        $answer1_3 = $answer1_3['COUNT(id)'];



        $sql = "SELECT COUNT(id) FROM answer2_1";
        $answer2_1 = $pdo->query($sql);
        $answer2_1 = $answer2_1->fetch(PDO::FETCH_ASSOC);
        $answer2_1 = $answer2_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer2_2";
        $answer2_2 = $pdo->query($sql);
        $answer2_2 = $answer2_2->fetch(PDO::FETCH_ASSOC);
        $answer2_2 = $answer2_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer2_3";
        $answer2_3 = $pdo->query($sql);
        $answer2_3 = $answer2_3->fetch(PDO::FETCH_ASSOC);
        $answer2_3 = $answer2_3['COUNT(id)'];


        $sql = "SELECT COUNT(id) FROM answer3_1";
        $answer3_1 = $pdo->query($sql);
        $answer3_1 = $answer3_1->fetch(PDO::FETCH_ASSOC);
        $answer3_1 = $answer3_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer3_2";
        $answer3_2 = $pdo->query($sql);
        $answer3_2 = $answer3_2->fetch(PDO::FETCH_ASSOC);
        $answer3_2 = $answer3_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer3_3";
        $answer3_3 = $pdo->query($sql);
        $answer3_3 = $answer3_3->fetch(PDO::FETCH_ASSOC);
        $answer3_3 = $answer3_3['COUNT(id)'];





        $p1_1 = round($answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
        $p1_2 = round($answer1_2 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
        $p1_3 = round($answer1_3 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));

        $p2_1 = round($answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
        $p2_2 = round($answer2_2 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
        $p2_3 = round($answer2_3 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));

        $p3_1 = round($answer3_1 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
        $p3_2 = round($answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
        $p3_3 = round($answer3_3 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));


        echo '<h2><a href="../openAfter.php">меню</a></h2>';

        echo '<div class="results">';

        echo '<div class="pie">';

        $sql = "SELECT * FROM questions";
        $questions = $pdo->query($sql);
        $questions = $questions->fetchAll(PDO::FETCH_ASSOC);

        ?>


        <div style="/* Задаем максимальную ширину, чтобы блок не растягивался на весь экран */
    max-width: 800px;
    width: 100%;
    
    /* Устанавливаем автоматические левый и правый отступы для центрирования */
    margin-left: auto;
    margin-right: auto;" class="slide" name="slide" id="slideslideIface2">




                <div class="slide-container">

                        <!-- Заголовок вопроса 1 -->
                        <div class="question-header">
                                <?= $questions[0]['question'] ?>
                        </div>


                        <!-- СТРОКА 1 (Зеленая строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <!-- Столбец 1: Вариант ответа -->
                                        <div class="table-cell row-default">
                                                <?= $questions[0]['answer1'] ?>
                                        </div>
                                        <!-- Столбец 2: Статистика 1 -->
                                        <div class="table-cell row-default" id="q1-a1-stats">
                                                Отв: <?= $answer1_1 ?> / <?= $p1_1 ?>%
                                        </div>
                                        <!-- Столбец 3: Статистика 2 -->

                                </div>
                        </div>

                        <!-- СТРОКА 2 (Обычная строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default" >
                                                <?= $questions[0]['answer2'] ?>
                                        </div>
                                        <div class=" table-cell row-default" id="q1-a2-stats">
                                                Отв: <?= $answer1_2 ?> / <?= $p1_2 ?>%
                                        </div>
                                </div>
                        </div>

                        <!-- СТРОКА 3 (Обычная строка) -->
                        <div class=" answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default" >
                                                <?= $questions[0]['answer3'] ?>
                                        </div>
                                        <div class="table-cell row-default" id="q1-a3-stats">
                                                Отв: <?= $answer1_3 ?> / <?= $p1_3 ?>%
                                        </div>

                                </div>
                        </div>

                </div>

                <div class="slide-container">

                        <!-- Заголовок вопроса 1 -->
                        <div class="question-header">
                                <?= $questions[1]['question'] ?>
                        </div>



                        <div class="answer-group">
                                <div class="results-table">

                                        <div class="table-cell row-default" >
                                                <?= $questions[1]['answer1'] ?>
                                        </div>
                                        <!-- Столбец 2: Статистика 1 -->
                                        <div class=" table-cell row-default" id="q2-a1-stats">
                                                Отв: <?= $answer2_1 ?> / <?= $p2_1 ?>%
                                        </div>

                                </div>
                        </div>


                        <div class="answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default">
                                                <?= $questions[1]['answer2'] ?>
                                        </div>
                                        <div class="table-cell row-default" id="q2-a2-stats">
                                                Отв: <?= $answer2_2 ?> / <?= $p2_2 ?>%
                                        </div>
                                </div>
                        </div>

                        <!-- СТРОКА 3 (Обычная строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default">
                                                <?= $questions[1]['answer3'] ?>
                                        </div>
                                        <div class="table-cell row-default" id="q2-a3-stats">
                                                Отв: <?= $answer2_3 ?> / <?= $p2_3 ?>%
                                        </div>
                                </div>
                        </div>

                </div>

                <div class="slide-container">

                        <!-- Заголовок вопроса 1 -->
                        <div class="question-header">
                                <?= $questions[2]['question'] ?>
                        </div>

                        <?php
                        // **ВАЖНО**: Здесь должны быть доступны все ваши переменные:
                        // $answer1_1, $p1_1, $a_answer1_1, $a_p1_1 и т.д.
                        ?>

                        <!-- СТРОКА 1 (Зеленая строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <!-- Столбец 1: Вариант ответа -->
                                        <div class="table-cell row-default">
                                                <?= $questions[2]['answer1'] ?>
                                        </div>
                                        <!-- Столбец 2: Статистика 1 -->
                                        <div class="table-cell row-default" id="q3-a1-stats">
                                                Отв: <?= $answer3_1 ?> / <?= $p3_1 ?>%
                                        </div>
                                </div>
                        </div>

                        <!-- СТРОКА 2 (Обычная строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default">
                                                <?= $questions[2]['answer2'] ?>
                                        </div>
                                        <div class=" table-cell row-default" id="q3-a2-stats">
                                                Отв: <?= $answer3_2 ?> / <?= $p3_2 ?>%
                                        </div>
                                </div>
                        </div>

                        <!-- СТРОКА 3 (Обычная строка) -->
                        <div class="answer-group">
                                <div class="results-table">
                                        <div class="table-cell row-default">
                                                <?= $questions[2]['answer3'] ?>
                                        </div>
                                        <div class="table-cell row-default" id="q3-a3-stats">
                                                Отв: <?= $answer3_3 ?> / <?= $p3_3 ?>%
                                        </div>
                                </div>
                        </div>

                </div>


        </div>


        <?php

        echo '</div>';

        echo '</div>';

        echo '<hr>';
        ?>

        <hr>

        <h3><a href="../new_view/result.php">Старый вариант таблицы - без автообновления</a></h3>

        <hr>

        <h3><a href="../index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
        <img width="40%" src="../qr-code.png" alt="qr-code">
        <hr>

        <h3><a href="../del_result.php">Сбросить голоса</a></h3>

        <hr>

        <script>
                // Функция для получения и обновления данных
                function updatePollResults() {
                        fetch('result_gen.php')
                                .then(response => response.json())
                                .then(data => {
                                        document.getElementById('q1-a1-stats').innerText = `Отв: ${data.counts.answer1_1} / ${data.percents.p1_1}%`;
                                        document.getElementById('q1-a2-stats').innerText = `Отв: ${data.counts.answer1_2} / ${data.percents.p1_2}%`;
                                        document.getElementById('q1-a3-stats').innerText = `Отв: ${data.counts.answer1_3} / ${data.percents.p1_3}%`;

                                        document.getElementById('q2-a1-stats').innerText = `Отв: ${data.counts.answer2_1} / ${data.percents.p2_1}%`;
                                        document.getElementById('q2-a2-stats').innerText = `Отв: ${data.counts.answer2_2} / ${data.percents.p2_2}%`;
                                        document.getElementById('q2-a3-stats').innerText = `Отв: ${data.counts.answer2_3} / ${data.percents.p2_3}%`;

                                        document.getElementById('q3-a1-stats').innerText = `Отв: ${data.counts.answer3_1} / ${data.percents.p3_1}%`;
                                        document.getElementById('q3-a2-stats').innerText = `Отв: ${data.counts.answer3_2} / ${data.percents.p3_2}%`;
                                        document.getElementById('q3-a3-stats').innerText = `Отв: ${data.counts.answer3_3} / ${data.percents.p3_3}%`;
                                })
                                .catch(error => console.error('Ошибка при получении данных:', error));
                }

                // Вызываем функцию обновления при загрузке страницы
                updatePollResults();

                // Устанавливаем интервал для автоматического обновления каждые 5 секунд
                setInterval(updatePollResults, 5000); 
        </script>

</body>

</html>