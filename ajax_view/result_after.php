<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"><!-- 32×32 -->
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


    $sql = "SELECT COUNT(id) FROM a_answer1_1";
    $a_answer1_1 = $pdo->query($sql);
    $a_answer1_1 = $a_answer1_1->fetch(PDO::FETCH_ASSOC);
    $a_answer1_1 = $a_answer1_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer1_2";
    $a_answer1_2 = $pdo->query($sql);
    $a_answer1_2 = $a_answer1_2->fetch(PDO::FETCH_ASSOC);
    $a_answer1_2 = $a_answer1_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer1_3";
    $a_answer1_3 = $pdo->query($sql);
    $a_answer1_3 = $a_answer1_3->fetch(PDO::FETCH_ASSOC);
    $a_answer1_3 = $a_answer1_3['COUNT(id)'];

    $sql = "SELECT COUNT(id) FROM a_answer2_1";
    $a_answer2_1 = $pdo->query($sql);
    $a_answer2_1 = $a_answer2_1->fetch(PDO::FETCH_ASSOC);
    $a_answer2_1 = $a_answer2_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer2_2";
    $a_answer2_2 = $pdo->query($sql);
    $a_answer2_2 = $a_answer2_2->fetch(PDO::FETCH_ASSOC);
    $a_answer2_2 = $a_answer2_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer2_3";
    $a_answer2_3 = $pdo->query($sql);
    $a_answer2_3 = $a_answer2_3->fetch(PDO::FETCH_ASSOC);
    $a_answer2_3 = $a_answer2_3['COUNT(id)'];

    $sql = "SELECT COUNT(id) FROM a_answer3_1";
    $a_answer3_1 = $pdo->query($sql);
    $a_answer3_1 = $a_answer3_1->fetch(PDO::FETCH_ASSOC);
    $a_answer3_1 = $a_answer3_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer3_2";
    $a_answer3_2 = $pdo->query($sql);
    $a_answer3_2 = $a_answer3_2->fetch(PDO::FETCH_ASSOC);
    $a_answer3_2 = $a_answer3_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer3_3";
    $a_answer3_3 = $pdo->query($sql);
    $a_answer3_3 = $a_answer3_3->fetch(PDO::FETCH_ASSOC);
    $a_answer3_3 = $a_answer3_3['COUNT(id)'];







    $p1_1 = round($answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
    $p1_2 = round($answer1_2 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
    $p1_3 = round($answer1_3 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));

    $p2_1 = round($answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
    $p2_2 = round($answer2_2 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
    $p2_3 = round($answer2_3 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));

    $p3_1 = round($answer3_1 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
    $p3_2 = round($answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
    $p3_3 = round($answer3_3 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));



    $a_p1_1 = round($a_answer1_1 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3));
    $a_p1_2 = round($a_answer1_2 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3));
    $a_p1_3 = round($a_answer1_3 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3));

    $a_p2_1 = round($a_answer2_1 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3));
    $a_p2_2 = round($a_answer2_2 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3));
    $a_p2_3 = round($a_answer2_3 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3));

    $a_p3_1 = round($a_answer3_1 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3));
    $a_p3_2 = round($a_answer3_2 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3));
    $a_p3_3 = round($a_answer3_3 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3));



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




        <!-- Вопрос 1 -->
        <div class="slide-container">
            <!-- Заголовок вопроса 1 (STATIC) -->
            <div class="question-header">
                <?= $questions[0]['question'] ?>
            </div>

            <!-- СТРОКА 1 -->
            <div class="answer-group">
                <div class="results-table">
                    <!-- Вариант ответа (STATIC) -->
                    <div class="table-cell row-default">
                        <?= $questions[0]['answer1'] ?>
                    </div>
                    <!-- Статистика 1 (DYNAMIC ID) -->
                    <div class="table-cell row-default" id="q1-a1-stats-main">
                        Отв: <?= $answer1_1 ?> / <?= $p1_1 ?>%
                    </div>
                    <!-- Статистика 2 (DYNAMIC ID) -->
                    <div class="table-cell row-default" id="q1-a1-stats-alt">
                        Отв: <?= $a_answer1_1 ?> / <?= $a_p1_1 ?>%
                    </div>
                </div>
            </div>

            <!-- СТРОКА 2 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-correct">
                        <?= $questions[0]['answer2'] ?>
                    </div>
                    <div class="table-cell row-correct" id="q1-a2-stats-main">
                        Отв: <?= $answer1_2 ?> / <?= $p1_2 ?>%
                    </div>
                    <div class="table-cell row-correct" id="q1-a2-stats-alt">
                        Отв: <?= $a_answer1_2 ?> / <?= $a_p1_2 ?>%
                    </div>
                </div>
            </div>

            <!-- СТРОКА 3 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-default">
                        <?= $questions[0]['answer3'] ?>
                    </div>
                    <div class="table-cell row-default" id="q1-a3-stats-main">
                        Отв: <?= $answer1_3 ?> / <?= $p1_3 ?>%
                    </div>
                    <div class="table-cell row-default" id="q1-a3-stats-alt">
                        Отв: <?= $a_answer1_3 ?> / <?= $a_p1_3 ?>%
                    </div>
                </div>
            </div>
        </div>

        <!-- Вопрос 2 -->
        <div class="slide-container">
            <!-- Заголовок вопроса 2 (STATIC) -->
            <div class="question-header">
                <?= $questions[1]['question'] ?>
            </div>
            <!-- ... (Добавьте ID для Q2 по аналогии) ... -->
            <!-- Q2 a1 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-correct"> <?= $questions[1]['answer1'] ?> </div>
                    <div class="table-cell row-correct" id="q2-a1-stats-main"> Отв: <?= $answer2_1 ?> / <?= $p2_1 ?>%
                    </div>
                    <div class="table-cell row-correct" id="q2-a1-stats-alt"> Отв: <?= $a_answer2_1 ?> / <?= $a_p2_1 ?>%
                    </div>
                </div>
            </div>
            <!-- Q2 a2 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-default"> <?= $questions[1]['answer2'] ?> </div>
                    <div class="table-cell row-default" id="q2-a2-stats-main"> Отв: <?= $answer2_2 ?> / <?= $p2_2 ?>%
                    </div>
                    <div class="table-cell row-default" id="q2-a2-stats-alt"> Отв: <?= $a_answer2_2 ?> / <?= $a_p2_2 ?>%
                    </div>
                </div>
            </div>
            <!-- Q2 a3 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-default"> <?= $questions[1]['answer3'] ?> </div>
                    <div class="table-cell row-default" id="q2-a3-stats-main"> Отв: <?= $answer2_3 ?> / <?= $p2_3 ?>%
                    </div>
                    <div class="table-cell row-default" id="q2-a3-stats-alt"> Отв: <?= $a_answer2_3 ?> / <?= $a_p2_3 ?>%
                    </div>
                </div>
            </div>
        </div>

        <!-- Вопрос 3 -->
        <div class="slide-container">
            <!-- Заголовок вопроса 3 (STATIC) -->
            <div class="question-header">
                <?= $questions[2]['question'] ?>
            </div>
            <!-- ... (Добавьте ID для Q3 по аналогии) ... -->
            <!-- Q3 a1 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-default"> <?= $questions[2]['answer1'] ?> </div>
                    <div class="table-cell row-default" id="q3-a1-stats-main"> Отв: <?= $answer3_1 ?> / <?= $p3_1 ?>%
                    </div>
                    <div class="table-cell row-default" id="q3-a1-stats-alt"> Отв: <?= $a_answer3_1 ?> / <?= $a_p3_1 ?>%
                    </div>
                </div>
            </div>
            <!-- Q3 a2 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-correct"> <?= $questions[2]['answer2'] ?> </div>
                    <div class="table-cell row-correct" id="q3-a2-stats-main"> Отв: <?= $answer3_2 ?> / <?= $p3_2 ?>%
                    </div>
                    <div class="table-cell row-correct" id="q3-a2-stats-alt"> Отв: <?= $a_answer3_2 ?> / <?= $a_p3_2 ?>%
                    </div>
                </div>
            </div>
            <!-- Q3 a3 -->
            <div class="answer-group">
                <div class="results-table">
                    <div class="table-cell row-default"> <?= $questions[2]['answer3'] ?> </div>
                    <div class="table-cell row-default" id="q3-a3-stats-main"> Отв: <?= $answer3_3 ?> / <?= $p3_3 ?>%
                    </div>
                    <div class="table-cell row-default" id="q3-a3-stats-alt"> Отв: <?= $a_answer3_3 ?> / <?= $a_p3_3 ?>%
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

    <h3><a href="../new_view/result_after.php">Старый вариант результатов - без автообновления</a></h3>

    <hr>

    <h3><a href="../index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
    <img width="40%" src="../qr-code.png" alt="qr-code">
    <hr>

    <h3><a href="../del_result.php">Сбросить голоса</a></h3>

    <hr>

    <script>
        function updatePollResults() {
            fetch('result_after_gen.php')
                .then(response => response.json())
                .then(data => {
                    // === Вопрос 1 ===
                    // Main stats
                    document.getElementById('q1-a1-stats-main').innerText = `Отв: ${data.counts.answer1_1} / ${data.percents.p1_1}%`;
                    document.getElementById('q1-a2-stats-main').innerText = `Отв: ${data.counts.answer1_2} / ${data.percents.p1_2}%`;
                    document.getElementById('q1-a3-stats-main').innerText = `Отв: ${data.counts.answer1_3} / ${data.percents.p1_3}%`;
                    // Alt stats
                    document.getElementById('q1-a1-stats-alt').innerText = `Отв: ${data.a_counts.a_answer1_1} / ${data.a_percents.a_p1_1}%`;
                    document.getElementById('q1-a2-stats-alt').innerText = `Отв: ${data.a_counts.a_answer1_2} / ${data.a_percents.a_p1_2}%`;
                    document.getElementById('q1-a3-stats-alt').innerText = `Отв: ${data.a_counts.a_answer1_3} / ${data.a_percents.a_p1_3}%`;

                    // === Вопрос 2 ===
                    // Main stats
                    document.getElementById('q2-a1-stats-main').innerText = `Отв: ${data.counts.answer2_1} / ${data.percents.p2_1}%`;
                    document.getElementById('q2-a2-stats-main').innerText = `Отв: ${data.counts.answer2_2} / ${data.percents.p2_2}%`;
                    document.getElementById('q2-a3-stats-main').innerText = `Отв: ${data.counts.answer2_3} / ${data.percents.p2_3}%`;
                    // Alt stats
                    document.getElementById('q2-a1-stats-alt').innerText = `Отв: ${data.a_counts.a_answer2_1} / ${data.a_percents.a_p2_1}%`;
                    document.getElementById('q2-a2-stats-alt').innerText = `Отв: ${data.a_counts.a_answer2_2} / ${data.a_percents.a_p2_2}%`;
                    document.getElementById('q2-a3-stats-alt').innerText = `Отв: ${data.a_counts.a_answer2_3} / ${data.a_percents.a_p2_3}%`;

                    // === Вопрос 3 ===
                    // Main stats
                    document.getElementById('q3-a1-stats-main').innerText = `Отв: ${data.counts.answer3_1} / ${data.percents.p3_1}%`;
                    document.getElementById('q3-a2-stats-main').innerText = `Отв: ${data.counts.answer3_2} / ${data.percents.p3_2}%`;
                    document.getElementById('q3-a3-stats-main').innerText = `Отв: ${data.counts.answer3_3} / ${data.percents.p3_3}%`;
                    // Alt stats
                    document.getElementById('q3-a1-stats-alt').innerText = `Отв: ${data.a_counts.a_answer3_1} / ${data.a_percents.a_p3_1}%`;
                    document.getElementById('q3-a2-stats-alt').innerText = `Отв: ${data.a_counts.a_answer3_2} / ${data.a_percents.a_p3_2}%`;
                    document.getElementById('q3-a3-stats-alt').innerText = `Отв: ${data.a_counts.a_answer3_3} / ${data.a_percents.a_p3_3}%`;

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