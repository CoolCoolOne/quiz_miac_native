<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"><!-- 32×32 -->
    <link rel="stylesheet" href="./styles.css">
    <title>Результаты</title>


</head>

<body>
    <img width="400px" src="./logo.png" alt="логотипс">


    <?php

    require_once './connect.php';

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


    $persent1 = $answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4);
    $persent2 = $answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4);
    $persent3 = $answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4);
    $persent4 = $answer4_3 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4);
    $persent5 = $answer5_3 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4);

    echo '<h2><a href="./openAfter.php">меню</a></h2>';

    echo '<div class="results">';

    echo '<div class="pie">';

    ?>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Результаты голосования"
                },
                axisX: {
                    interval: 1
                },
                axisY2: {
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Процент правильных ответов"
                },
                data: [{
                    type: "bar",
                    name: "Вопросы",
                    color: "#FFBA61",
                    axisYType: "secondary",
                    dataPoints: [
                        { y: <?php echo json_encode($persent5, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 5" },
                        { y: <?php echo json_encode($persent4, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 4" },
                        { y: <?php echo json_encode($persent3, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 3" },
                        { y: <?php echo json_encode($persent2, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 2" },
                        { y: <?php echo json_encode($persent1, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 1" },
                    ]
                }]
            });
            chart.render();

        }
    </script>
    <div id="chartContainer" style="height: 600px; width: 90%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <?php

    echo '</div>';

    echo '</div>';

    echo '<hr>';
    ?>

    <hr>

    <h3><a href="./result.php">Обновить страницу</a></h3>

    <hr>

    <h3><a href="./index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
    <img width="40%" src="./qr-code.png" alt="qr-code">
    <hr>

    <h3><a href="./del_result.php">Сбросить голоса</a></h3>

    <hr>



</body>

</html>