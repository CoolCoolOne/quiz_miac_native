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
    $sql = "SELECT COUNT(id) FROM answer1_4";
    $answer1_4 = $pdo->query($sql);
    $answer1_4 = $answer1_4->fetch(PDO::FETCH_ASSOC);
    $answer1_4 = $answer1_4['COUNT(id)'];
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
    $sql = "SELECT COUNT(id) FROM answer2_4";
    $answer2_4 = $pdo->query($sql);
    $answer2_4 = $answer2_4->fetch(PDO::FETCH_ASSOC);
    $answer2_4 = $answer2_4['COUNT(id)'];
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
    $sql = "SELECT COUNT(id) FROM answer3_4";
    $answer3_4 = $pdo->query($sql);
    $answer3_4 = $answer3_4->fetch(PDO::FETCH_ASSOC);
    $answer3_4 = $answer3_4['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer4_1";
    $answer4_1 = $pdo->query($sql);
    $answer4_1 = $answer4_1->fetch(PDO::FETCH_ASSOC);
    $answer4_1 = $answer4_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer4_2";
    $answer4_2 = $pdo->query($sql);
    $answer4_2 = $answer4_2->fetch(PDO::FETCH_ASSOC);
    $answer4_2 = $answer4_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer4_3";
    $answer4_3 = $pdo->query($sql);
    $answer4_3 = $answer4_3->fetch(PDO::FETCH_ASSOC);
    $answer4_3 = $answer4_3['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer4_4";
    $answer4_4 = $pdo->query($sql);
    $answer4_4 = $answer4_4->fetch(PDO::FETCH_ASSOC);
    $answer4_4 = $answer4_4['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer5_1";
    $answer5_1 = $pdo->query($sql);
    $answer5_1 = $answer5_1->fetch(PDO::FETCH_ASSOC);
    $answer5_1 = $answer5_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer5_2";
    $answer5_2 = $pdo->query($sql);
    $answer5_2 = $answer5_2->fetch(PDO::FETCH_ASSOC);
    $answer5_2 = $answer5_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer5_3";
    $answer5_3 = $pdo->query($sql);
    $answer5_3 = $answer5_3->fetch(PDO::FETCH_ASSOC);
    $answer5_3 = $answer5_3['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM answer5_4";
    $answer5_4 = $pdo->query($sql);
    $answer5_4 = $answer5_4->fetch(PDO::FETCH_ASSOC);
    $answer5_4 = $answer5_4['COUNT(id)'];

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
    $sql = "SELECT COUNT(id) FROM a_answer1_4";
    $a_answer1_4 = $pdo->query($sql);
    $a_answer1_4 = $a_answer1_4->fetch(PDO::FETCH_ASSOC);
    $a_answer1_4 = $a_answer1_4['COUNT(id)'];
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
    $sql = "SELECT COUNT(id) FROM a_answer2_4";
    $a_answer2_4 = $pdo->query($sql);
    $a_answer2_4 = $a_answer2_4->fetch(PDO::FETCH_ASSOC);
    $a_answer2_4 = $a_answer2_4['COUNT(id)'];
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
    $sql = "SELECT COUNT(id) FROM a_answer3_4";
    $a_answer3_4 = $pdo->query($sql);
    $a_answer3_4 = $a_answer3_4->fetch(PDO::FETCH_ASSOC);
    $a_answer3_4 = $a_answer3_4['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer4_1";
    $a_answer4_1 = $pdo->query($sql);
    $a_answer4_1 = $a_answer4_1->fetch(PDO::FETCH_ASSOC);
    $a_answer4_1 = $a_answer4_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer4_2";
    $a_answer4_2 = $pdo->query($sql);
    $a_answer4_2 = $a_answer4_2->fetch(PDO::FETCH_ASSOC);
    $a_answer4_2 = $a_answer4_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer4_3";
    $a_answer4_3 = $pdo->query($sql);
    $a_answer4_3 = $a_answer4_3->fetch(PDO::FETCH_ASSOC);
    $a_answer4_3 = $a_answer4_3['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer4_4";
    $a_answer4_4 = $pdo->query($sql);
    $a_answer4_4 = $a_answer4_4->fetch(PDO::FETCH_ASSOC);
    $a_answer4_4 = $a_answer4_4['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer5_1";
    $a_answer5_1 = $pdo->query($sql);
    $a_answer5_1 = $a_answer5_1->fetch(PDO::FETCH_ASSOC);
    $a_answer5_1 = $a_answer5_1['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer5_2";
    $a_answer5_2 = $pdo->query($sql);
    $a_answer5_2 = $a_answer5_2->fetch(PDO::FETCH_ASSOC);
    $a_answer5_2 = $a_answer5_2['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer5_3";
    $a_answer5_3 = $pdo->query($sql);
    $a_answer5_3 = $a_answer5_3->fetch(PDO::FETCH_ASSOC);
    $a_answer5_3 = $a_answer5_3['COUNT(id)'];
    $sql = "SELECT COUNT(id) FROM a_answer5_4";
    $a_answer5_4 = $pdo->query($sql);
    $a_answer5_4 = $a_answer5_4->fetch(PDO::FETCH_ASSOC);
    $a_answer5_4 = $a_answer5_4['COUNT(id)'];





    $p1_1 = round($answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4));
    $p1_2 = round($answer1_2 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4));
    $p1_3 = round($answer1_3 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4));
    $p1_4 = round($answer1_4 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4));
    $p2_1 = round($answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4));
    $p2_2 = round($answer2_2 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4));
    $p2_3 = round($answer2_3 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4));
    $p2_4 = round($answer2_4 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4));
    $p3_1 = round($answer3_1 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4));
    $p3_2 = round($answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4));
    $p3_3 = round($answer3_3 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4));
    $p3_4 = round($answer3_4 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4));
    $p4_1 = round($answer4_1 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4));
    $p4_2 = round($answer4_2 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4));
    $p4_3 = round($answer4_3 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4));
    $p4_4 = round($answer4_4 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4));
    $p5_1 = round($answer5_1 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4));
    $p5_2 = round($answer5_2 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4));
    $p5_3 = round($answer5_3 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4));
    $p5_4 = round($answer5_4 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4));

    $a_p1_1 = round($a_answer1_1 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3 + $a_answer1_4));
    $a_p1_2 = round($a_answer1_2 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3 + $a_answer1_4));
    $a_p1_3 = round($a_answer1_3 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3 + $a_answer1_4));
    $a_p1_4 = round($a_answer1_4 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3 + $a_answer1_4));
    $a_p2_1 = round($a_answer2_1 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3 + $a_answer2_4));
    $a_p2_2 = round($a_answer2_2 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3 + $a_answer2_4));
    $a_p2_3 = round($a_answer2_3 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3 + $a_answer2_4));
    $a_p2_4 = round($a_answer2_4 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3 + $a_answer2_4));
    $a_p3_1 = round($a_answer3_1 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3 + $a_answer3_4));
    $a_p3_2 = round($a_answer3_2 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3 + $a_answer3_4));
    $a_p3_3 = round($a_answer3_3 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3 + $a_answer3_4));
    $a_p3_4 = round($a_answer3_4 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3 + $a_answer3_4));
    $a_p4_1 = round($a_answer4_1 * 100 / ($a_answer4_1 + $a_answer4_2 + $a_answer4_3 + $a_answer4_4));
    $a_p4_2 = round($a_answer4_2 * 100 / ($a_answer4_1 + $a_answer4_2 + $a_answer4_3 + $a_answer4_4));
    $a_p4_3 = round($a_answer4_3 * 100 / ($a_answer4_1 + $a_answer4_2 + $a_answer4_3 + $a_answer4_4));
    $a_p4_4 = round($a_answer4_4 * 100 / ($a_answer4_1 + $a_answer4_2 + $a_answer4_3 + $a_answer4_4));
    $a_p5_1 = round($a_answer5_1 * 100 / ($a_answer5_1 + $a_answer5_2 + $a_answer5_3 + $a_answer5_4));
    $a_p5_2 = round($a_answer5_2 * 100 / ($a_answer5_1 + $a_answer5_2 + $a_answer5_3 + $a_answer5_4));
    $a_p5_3 = round($a_answer5_3 * 100 / ($a_answer5_1 + $a_answer5_2 + $a_answer5_3 + $a_answer5_4));
    $a_p5_4 = round($a_answer5_4 * 100 / ($a_answer5_1 + $a_answer5_2 + $a_answer5_3 + $a_answer5_4));

    echo '<h2><a href="../openAfter.php">меню</a></h2>';

    echo '<div class="results">';

    echo '<div class="pie">';

    ?>

    <div style="padding-left: 10%;" class="slide" name="slide" id="slideslideIface2">

    <!-- ВНИМАНИЕ: Стили ниже можно перенести в ваш файл styles.css -->
    <style>
        .slide-container {
            width: 100%;
            max-width: 720px; /* Ширина вашего SVG viewBox */
            font-family: 'Lucida Console', monospace;
            padding-top: 10px;
        }

        .question-header {
            background-color: #9DC3E6;
            border: 1px solid #41719C;
            border-radius: 8px; /* Имитация закругленных углов в SVG */
            padding: 8px 15px;
            margin-bottom: 20px;
            font-size: 0.8rem;
            font-style: italic;
            color: #000;
        }

        .answer-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            height: 25px; /* Высота ваших SVG rects */
        }

        .answer-label-text {
            /* Позиционирование текста слева от полосы */
            margin-right: 15px;
            font-size: 0.75rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Цвета текста из вашего SVG */
        }
        
        .answer-label-text.golikova { color: #000000; }
        .answer-label-text.putin { color: #0070C0; }
        .answer-label-text.mishustin { color: #2E75B6; }
        .answer-label-text.murashko { color: #2E75B6; }


        .progress-container-flex {
            flex-grow: 1; /* Занимает оставшееся пространство */
            height: 100%;
            background-color: #DEEBF7; /* Цвет фона полосы из SVG */
            border: 1px solid #41719C; /* Обводка из SVG */
            border-radius: 5px; /* Закругленные углы */
            overflow: hidden;
            display: flex;
            align-items: center;
            max-width: 460px; /* Примерная максимальная ширина ваших полос в SVG (475px) */
        }

        .progress-fill-flex {
            height: 100%;
            /* Цвет заполнения для правильного ответа Голиковой из SVG */
            background-color: #C5E0B4; 
            border-right: 1px solid #548235; /* Обводка из SVG */
            /* Текст внутри полосы */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: #0070C0; /* Цвет текста статистики из SVG */
            box-sizing: border-box;
        }
        
        .stats-text {
            margin-left: 10px;
            font-size: 0.75rem;
            color: #0070C0;
            white-space: nowrap;
        }
    </style>

    <div class="slide-container">

        <!-- Заголовок вопроса 1 -->
        <div class="question-header">
            1. Кто в Российской Федерации является куратором национального проекта «Продолжительная и активная жизнь»?
        </div>

        <?php
            // **ВАЖНО**: Предполагается, что ваш предыдущий PHP-код, 
            // который рассчитывает $p1_1, $p1_2, $answer1_1 и т.д., 
            // находится выше в файле и эти переменные доступны.

            // Пример значений для тестирования (если нужно раскомментировать):
            // $answer1_1 = 50; $p1_1 = 50;
            // $answer1_2 = 30; $p1_2 = 30;
            // $answer1_3 = 10; $p1_3 = 10;
            // $answer1_4 = 10; $p1_4 = 10;
        ?>

        <!-- Ответ 1: Т.А.Голикова (Правильный ответ, зеленая полоса) -->
        <div class="answer-row">
            <div class="answer-label-text golikova" style="width: 350px;">
                Заместитель Председателя Правительства Российской Федерации Т.А.Голикова
            </div>
            <div class="progress-container-flex">
                <!-- Здесь PHP переменная управляет шириной -->
                <div class="progress-fill-flex" style="width: <?=$p1_1?>%; background-color: #C5E0B4; border-color: #548235;">
                </div>
            </div>
             <!-- Статистика справа -->
             <div class="stats-text"><?=$answer1_1?> (<?=$p1_1?>%)</div>
        </div>

        <!-- Ответ 2: В.В.Путин (Обычная полоса) -->
        <div class="answer-row">
             <div class="answer-label-text putin" style="width: 350px;">
                Президент Российской Федерации В.В.Путин
             </div>
            <div class="progress-container-flex">
                <!-- Обычный цвет фона уже задан в CSS (.progress-container-flex) -->
                <div class="progress-fill-flex" style="width: <?=$p1_2?>%; background-color: #DEEBF7; border: none;">
                </div>
            </div>
            <div class="stats-text"><?=$answer1_2?> (<?=$p1_2?>%)</div>
        </div>
        
         <!-- Ответ 3: М.В.Мишустин (Обычная полоса) -->
        <div class="answer-row">
             <div class="answer-label-text mishustin" style="width: 350px;">
                Председатель Правительства Российской Федерации М.В.Мишустин
             </div>
            <div class="progress-container-flex">
                <div class="progress-fill-flex" style="width: <?=$p1_3?>%; background-color: #DEEBF7; border: none;">
                </div>
            </div>
            <div class="stats-text"><?=$answer1_3?> (<?=$p1_3?>%)</div>
        </div>

         <!-- Ответ 4: М.А.Мурашко (Обычная полоса) -->
        <div class="answer-row">
             <div class="answer-label-text murashko" style="width: 350px;">
                Министр здравоохранения Российской Федерации М.А.Мурашко
             </div>
            <div class="progress-container-flex">
                <div class="progress-fill-flex" style="width: <?=$p1_4?>%; background-color: #DEEBF7; border: none;">
                </div>
            </div>
            <div class="stats-text"><?=$answer1_4?> (<?=$p1_4?>%)</div>
        </div>


    </div>
</div>



    <?php

    echo '</div>';

    echo '</div>';

    echo '<hr>';
    ?>

    <hr>

    <h3><a href="./result_after.php">Обновить страницу</a></h3>

    <hr>

    <h3><a href="../index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
    <img width="40%" src="../qr-code.png" alt="qr-code">
    <hr>

    <h3><a href="../del_result.php">Сбросить голоса</a></h3>

    <hr>



</body>

</html>