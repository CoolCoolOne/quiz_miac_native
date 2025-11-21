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





    $persent1 = $answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3 + $answer1_4);
    $persent2 = $answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3 + $answer2_4);
    $persent3 = $answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3 + $answer3_4);
    $persent4 = $answer4_3 * 100 / ($answer4_1 + $answer4_2 + $answer4_3 + $answer4_4);
    $persent5 = $answer5_3 * 100 / ($answer5_1 + $answer5_2 + $answer5_3 + $answer5_4);

    $a_persent1 = $a_answer1_1 * 100 / ($a_answer1_1 + $a_answer1_2 + $a_answer1_3 + $a_answer1_4);
    $a_persent2 = $a_answer2_1 * 100 / ($a_answer2_1 + $a_answer2_2 + $a_answer2_3 + $a_answer2_4);
    $a_persent3 = $a_answer3_2 * 100 / ($a_answer3_1 + $a_answer3_2 + $a_answer3_3 + $a_answer3_4);
    $a_persent4 = $a_answer4_3 * 100 / ($a_answer4_1 + $a_answer4_2 + $a_answer4_3 + $a_answer4_4);
    $a_persent5 = $a_answer5_3 * 100 / ($a_answer5_1 + $a_answer5_2 + $a_answer5_3 + $a_answer5_4);

    echo '<h2><a href="./openAfter.php">меню</a></h2>';

    echo '<div class="results">';

    echo '<div class="pie">';

    ?>
    <script type="text/javascript">
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Результаты голосования со второй попытки"
                },
                axisY: {
                    title: "В процентах",
                    includeZero: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                toolTip: {
                    shared: true,
                    content: toolTipFormatter
                },
                data: [{
                    type: "bar",
                    showInLegend: true,
                    name: "До чтений",
                    color: "#FFBA61",
                    dataPoints: [
                        { y: <?php echo json_encode($persent5, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 5" },
                        { y: <?php echo json_encode($persent4, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 4" },
                        { y: <?php echo json_encode($persent3, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 3" },
                        { y: <?php echo json_encode($persent2, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 2" },
                        { y: <?php echo json_encode($persent1, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 1" },

                    ]
                },
                {
                    type: "bar",
                    showInLegend: true,
                    name: "После",
                    color: "#AEDDFF",
                    dataPoints: [
                        { y: <?php echo json_encode($a_persent5, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 5" },
                        { y: <?php echo json_encode($a_persent4, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 4" },
                        { y: <?php echo json_encode($a_persent3, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 3" },
                        { y: <?php echo json_encode($a_persent2, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 2" },
                        { y: <?php echo json_encode($a_persent1, JSON_NUMERIC_CHECK); ?>, label: "Вопрос 1" },
                    ]
                }]
            });
            chart.render();

            function toolTipFormatter(e) {
                var str = "";
                var total = 0;
                var str3;
                var str2;
                for (var i = 0; i < e.entries.length; i++) {
                    var str1 = "<span style= \"color:" + e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>" + e.entries[i].dataPoint.y + "</strong> <br/>";
                    total = e.entries[i].dataPoint.y + total;
                    str = str.concat(str1);
                }
                str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
                str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
                return (str2.concat(str)).concat(str3);
            }

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

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

    <h3><a href="./result_after.php">Обновить страницу</a></h3>

    <hr>

    <h3><a href="./index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
    <img width="40%" src="./qr-code.png" alt="qr-code">
    <hr>

    <h3><a href="./del_result.php">Сбросить голоса</a></h3>

    <hr>



</body>

</html>