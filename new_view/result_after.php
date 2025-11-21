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

    <div style="padding-left: 10%; /* Поле слева */" class="slide" name="slide" id="slideslideIface2"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="10in" height="7.5in" class="slides-canvas"
            pointer-events="none" viewBox="0 0 720 540">
            <g text-rendering="geometricPrecision" pointer-events="painted" transform="scale(1, 1)">
                <rect x="0" y="0" width="720" height="540" fill="#FFFFFF"></rect>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M-0 13.9C-0 7.66 5.05 2.61 11.29 2.61L708.71 2.61 708.71 2.61C714.95 2.61 720 7.66 720 13.9 720 13.9 720 13.9 720 13.9L720 59.05 720 59.05C720 65.29 714.95 70.34 708.71 70.34L11.29 70.34 11.29 70.34C5.05 70.34 0 65.29 -0 59.05z">
                </path>
                <path fill="#C5E0B4"
                    d="M11.87 21.48C11.87 20.49 12.68 19.69 13.67 19.69L473.35 19.69 473.35 19.69C474.35 19.69 475.15 20.49 475.15 21.48 475.15 21.48 475.15 21.48 475.15 21.48L475.15 28.68 475.15 28.68C475.15 29.68 474.35 30.48 473.35 30.48L13.67 30.48C12.68 30.48 11.87 29.68 11.87 28.68z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M11.87 21.48C11.87 20.49 12.68 19.69 13.67 19.69L473.35 19.69 473.35 19.69C474.35 19.69 475.15 20.49 475.15 21.48 475.15 21.48 475.15 21.48 475.15 21.48L475.15 28.68 475.15 28.68C475.15 29.68 474.35 30.48 473.35 30.48L13.67 30.48C12.68 30.48 11.87 29.68 11.87 28.68z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.600494, 23.812605)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="0" y="4.39281">
                        <tspan x="0" y="4.39281">Заместитель Председателя Правительства Российской Федерации
                            Т.А.Голикова</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.29 34.18C11.29 33.23 12.06 32.46 13.01 32.46L473.48 32.46 473.48 32.46C474.43 32.46 475.2 33.23 475.2 34.18 475.2 34.18 475.2 34.18 475.2 34.18L475.2 41.06 475.2 41.06C475.2 42.01 474.43 42.78 473.48 42.78L13.01 42.78 13.01 42.78C12.06 42.78 11.29 42.01 11.29 41.06z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.29 34.18C11.29 33.23 12.06 32.46 13.01 32.46L473.48 32.46 473.48 32.46C474.43 32.46 475.2 33.23 475.2 34.18 475.2 34.18 475.2 34.18 475.2 34.18L475.2 41.06 475.2 41.06C475.2 42.01 474.43 42.78 473.48 42.78L13.01 42.78 13.01 42.78C12.06 42.78 11.29 42.01 11.29 41.06z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.98999, 36.563236)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="4.1784143">
                        <tspan x="0" y="4.1784143">Президент Российской Федерации В.В.Путин</tspan>
                        <tspan xml:space="preserve" x="216.91406" y="4.1784143"> </tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.26 46.41C11.26 45.53 11.98 44.81 12.87 44.81L474.21 44.81 474.21 44.81C475.1 44.81 475.82 45.53 475.82 46.41 475.82 46.41 475.82 46.41 475.82 46.41L475.82 52.83 475.82 52.83C475.82 53.72 475.1 54.44 474.21 54.44L12.87 54.44 12.87 54.44C11.98 54.44 11.26 53.72 11.26 52.83z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.26 46.41C11.26 45.53 11.98 44.81 12.87 44.81L474.21 44.81 474.21 44.81C475.1 44.81 475.82 45.53 475.82 46.41 475.82 46.41 475.82 46.41 475.82 46.41L475.82 52.83 475.82 52.83C475.82 53.72 475.1 54.44 474.21 54.44L12.87 54.44 12.87 54.44C11.98 54.44 11.26 53.72 11.26 52.83z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.934097, 48.87866)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="3.8664575">
                        <tspan x="0" y="3.8664575">Председатель Правительства Российской Федерации М.В.Мишустин</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.29 58.5C11.29 57.52 12.08 56.72 13.06 56.72L473.43 56.72 473.43 56.72C474.41 56.72 475.2 57.52 475.2 58.5 475.2 58.5 475.2 58.5 475.2 58.5L475.2 65.59 475.2 65.59C475.2 66.57 474.41 67.37 473.43 67.37L13.06 67.37 13.06 67.37C12.08 67.37 11.29 66.57 11.29 65.59z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.29 58.5C11.29 57.52 12.08 56.72 13.06 56.72L473.43 56.72 473.43 56.72C474.41 56.72 475.2 57.52 475.2 58.5 475.2 58.5 475.2 58.5 475.2 58.5L475.2 65.59 475.2 65.59C475.2 66.57 474.41 67.37 473.43 67.37L13.06 67.37 13.06 67.37C12.08 67.37 11.29 66.57 11.29 65.59z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.00563, 60.844227)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="4.323024">
                        <tspan x="0" y="4.323024">Министр здравоохранения Российской Федерации М.А.Мурашко</tspan>
                    </text></g>
                <path fill="#9DC3E6"
                    d="M10.7 7.43C10.7 6.2 11.69 5.2 12.92 5.2L707.41 5.2 707.41 5.2C708.64 5.2 709.64 6.2 709.64 7.43 709.64 7.43 709.64 7.43 709.64 7.43L709.64 16.34 709.64 16.34C709.64 17.57 708.64 18.56 707.42 18.56L12.92 18.56 12.92 18.56C11.69 18.56 10.7 17.57 10.7 16.34z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 7.43C10.7 6.2 11.69 5.2 12.92 5.2L707.41 5.2 707.41 5.2C708.64 5.2 709.64 6.2 709.64 7.43 709.64 7.43 709.64 7.43 709.64 7.43L709.64 16.34 709.64 16.34C709.64 17.57 708.64 18.56 707.42 18.56L12.92 18.56 12.92 18.56C11.69 18.56 10.7 17.57 10.7 16.34z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.550262, 9.456829)"><text stroke="#000000" stroke-width="0.24pt"
                        font-family="Lucida Console" font-style="italic" font-weight="normal" font-stretch="normal"
                        font-size="7.875pt" fill="#000000" x="0" y="6.0694466">
                        <tspan x="0" y="6.0694466">1. Кто в Российской Федерации является куратором национального
                            проекта «Продолжительная и активная жизнь»?</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M492.85 22.08C492.85 21.03 493.7 20.19 494.74 20.19L590.98 20.19 590.98 20.19C592.02 20.19 592.87 21.03 592.87 22.08 592.87 22.08 592.87 22.08 592.87 22.08L592.87 29.63 592.87 29.63C592.87 30.68 592.02 31.52 590.98 31.52L494.74 31.52C493.7 31.52 492.85 30.68 492.85 29.63z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M492.85 22.08C492.85 21.03 493.7 20.19 494.74 20.19L590.98 20.19 590.98 20.19C592.02 20.19 592.87 21.03 592.87 22.08 592.87 22.08 592.87 22.08 592.87 22.08L592.87 29.63 592.87 29.63C592.87 30.68 592.02 31.52 590.98 31.52L494.74 31.52C493.7 31.52 492.85 30.68 492.85 29.63z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 500.60727, 24.341173)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.378914" y="4.636429">
                        <tspan x="15.378914" y="4.636429"><?=$answer1_1?> (<?=$p1_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M492.54 34.39C492.54 33.35 493.38 32.5 494.43 32.5L591.13 32.5 591.13 32.5C592.17 32.5 593.02 33.35 593.02 34.39 593.02 34.39 593.02 34.39 593.02 34.39L593.02 41.95 593.02 41.95C593.02 43 592.17 43.84 591.13 43.84L494.43 43.84 494.43 43.84C493.38 43.84 492.54 43 492.54 41.95z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M492.54 34.39C492.54 33.35 493.38 32.5 494.43 32.5L591.13 32.5 591.13 32.5C592.17 32.5 593.02 33.35 593.02 34.39 593.02 34.39 593.02 34.39 593.02 34.39L593.02 41.95 593.02 41.95C593.02 43 592.17 43.84 591.13 43.84L494.43 43.84 494.43 43.84C493.38 43.84 492.54 43 492.54 41.95z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 500.29156, 36.655685)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.611485" y="4.6389375">
                        <tspan x="15.611485" y="4.6389375"><?=$answer1_2?> (<?=$p1_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.97 47.33C491.97 46.39 492.74 45.63 493.68 45.63L591.58 45.63 591.58 45.63C592.52 45.63 593.29 46.39 593.29 47.33 593.29 47.33 593.29 47.33 593.29 47.33L593.29 54.15 593.29 54.15C593.29 55.09 592.52 55.85 591.58 55.85L493.68 55.85 493.68 55.85C492.74 55.85 491.97 55.09 491.97 54.15z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.97 47.33C491.97 46.39 492.74 45.63 493.68 45.63L591.58 45.63 591.58 45.63C592.52 45.63 593.29 46.39 593.29 47.33 593.29 47.33 593.29 47.33 593.29 47.33L593.29 54.15 593.29 54.15C593.29 55.09 592.52 55.85 591.58 55.85L493.68 55.85 493.68 55.85C492.74 55.85 491.97 55.09 491.97 54.15z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.67163, 49.727093)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="16.082893" y="4.1345077">
                        <tspan x="16.082893" y="4.1345077"><?=$answer1_3?> (<?=$p1_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M492.54 59.1C492.54 58.08 493.37 57.24 494.4 57.24L591.16 57.24 591.16 57.24C592.18 57.24 593.02 58.08 593.02 59.1 593.02 59.1 593.02 59.1 593.02 59.1L593.02 66.55 593.02 66.55C593.02 67.58 592.18 68.42 591.16 68.42L494.4 68.42 494.4 68.42C493.37 68.42 492.54 67.58 492.54 66.55z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M492.54 59.1C492.54 58.08 493.37 57.24 494.4 57.24L591.16 57.24 591.16 57.24C592.18 57.24 593.02 58.08 593.02 59.1 593.02 59.1 593.02 59.1 593.02 59.1L593.02 66.55 593.02 66.55C593.02 67.58 592.18 68.42 591.16 68.42L494.4 68.42 494.4 68.42C493.37 68.42 492.54 67.58 492.54 66.55z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 500.28336, 61.38717)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.619789" y="4.5631027">
                        <tspan x="15.619789" y="4.5631027"><?=$answer1_4?> (<?=$p1_4?>%)</tspan>
                    </text></g>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M-0 120.1C-0 114.3 4.7 109.6 10.49 109.6L709.51 109.6 709.51 109.6C715.3 109.6 720 114.3 720 120.1 720 120.1 720 120.1 720 120.1L720 162.08 720 162.08C720 167.87 715.3 172.57 709.51 172.57L10.49 172.57 10.49 172.57C4.7 172.57 0 167.87 -0 162.08z">
                </path>
                <path fill="#C5E0B4"
                    d="M11.29 126.16C11.29 125.12 12.13 124.28 13.17 124.28L473.32 124.28 473.32 124.28C474.36 124.28 475.2 125.12 475.2 126.16 475.2 126.16 475.2 126.16 475.2 126.16L475.2 133.67 475.2 133.67C475.2 134.71 474.36 135.55 473.32 135.55L13.17 135.55 13.17 135.55C12.13 135.55 11.29 134.71 11.29 133.67z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M11.29 126.16C11.29 125.12 12.13 124.28 13.17 124.28L473.32 124.28 473.32 124.28C474.36 124.28 475.2 125.12 475.2 126.16 475.2 126.16 475.2 126.16 475.2 126.16L475.2 133.67 475.2 133.67C475.2 134.71 474.36 135.55 473.32 135.55L13.17 135.55 13.17 135.55C12.13 135.55 11.29 134.71 11.29 133.67z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.036499, 128.42805)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="0" y="4.608254">
                        <tspan x="0" y="4.608254">Наложение административного штрафа на должностных лиц или
                            дисквалификацию</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M10.7 138C10.7 137.01 11.5 136.21 12.49 136.21L473.46 136.21 473.46 136.21C474.45 136.21 475.25 137.01 475.25 138 475.25 138 475.25 138 475.25 138L475.25 145.19 475.25 145.19C475.25 146.18 474.45 146.98 473.46 146.98L12.49 146.98C11.5 146.98 10.7 146.18 10.7 145.19z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 138C10.7 137.01 11.5 136.21 12.49 136.21L473.46 136.21 473.46 136.21C474.45 136.21 475.25 137.01 475.25 138 475.25 138 475.25 138 475.25 138L475.25 145.19 475.25 145.19C475.25 146.18 474.45 146.98 473.46 146.98L12.49 146.98C11.5 146.98 10.7 146.18 10.7 145.19z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.42395, 140.33208)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="4.3843474">
                        <tspan x="0" y="4.3843474">Наложение административного штрафа</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M10.68 149.44C10.68 148.51 11.43 147.76 12.35 147.76L474.19 147.76 474.19 147.76C475.12 147.76 475.87 148.51 475.87 149.44 475.87 149.44 475.87 149.44 475.87 149.44L475.87 156.14 475.87 156.14C475.87 157.07 475.12 157.82 474.19 157.82L12.35 157.82 12.35 157.82C11.43 157.82 10.68 157.07 10.68 156.14z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.68 149.44C10.68 148.51 11.43 147.76 12.35 147.76L474.19 147.76 474.19 147.76C475.12 147.76 475.87 148.51 475.87 149.44 475.87 149.44 475.87 149.44 475.87 149.44L475.87 156.14 475.87 156.14C475.87 157.07 475.12 157.82 474.19 157.82L12.35 157.82 12.35 157.82C11.43 157.82 10.68 157.07 10.68 156.14z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.36589, 151.8545)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="4.058612">
                        <tspan x="0" y="4.058612">Уголовная ответственность</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M10.7 160.58C10.7 159.56 11.53 158.73 12.55 158.73L473.4 158.73 473.4 158.73C474.42 158.73 475.25 159.56 475.25 160.58 475.25 160.58 475.25 160.58 475.25 160.58L475.25 167.99 475.25 167.99C475.25 169.01 474.42 169.84 473.4 169.84L12.55 169.84 12.55 169.84C11.53 169.84 10.7 169.01 10.7 167.99z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 160.58C10.7 159.56 11.53 158.73 12.55 158.73L473.4 158.73 473.4 158.73C474.42 158.73 475.25 159.56 475.25 160.58 475.25 160.58 475.25 160.58 475.25 160.58L475.25 167.99 475.25 167.99C475.25 169.01 474.42 169.84 473.4 169.84L12.55 169.84 12.55 169.84C11.53 169.84 10.7 169.01 10.7 167.99z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.440292, 162.87157)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="4.535338">
                        <tspan x="0" y="4.535338">Ответственность законодательно не определена</tspan>
                    </text></g>
                <path fill="#9DC3E6"
                    d="M10.7 113.86C10.7 112.84 11.52 112.02 12.54 112.02L707.8 112.02 707.8 112.02C708.82 112.02 709.64 112.84 709.64 113.86 709.64 113.86 709.64 113.86 709.64 113.86L709.64 121.24 709.64 121.24C709.64 122.26 708.82 123.08 707.8 123.08L12.54 123.08 12.54 123.08C11.52 123.08 10.7 122.26 10.7 121.24z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 113.86C10.7 112.84 11.52 112.02 12.54 112.02L707.8 112.02 707.8 112.02C708.82 112.02 709.64 112.84 709.64 113.86 709.64 113.86 709.64 113.86 709.64 113.86L709.64 121.24 709.64 121.24C709.64 122.26 708.82 123.08 707.8 123.08L12.54 123.08 12.54 123.08C11.52 123.08 10.7 122.26 10.7 121.24z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.438416, 116.15663)"><text stroke="#000000" stroke-width="0.24pt"
                        font-family="Lucida Console" font-style="italic" font-weight="normal" font-stretch="normal"
                        font-size="7.875pt" fill="#000000" x="0" y="5.035649">
                        <tspan x="0" y="5.035649">2. Какая ответственность предусматривается за невыполнение показателей
                            и результатов национальных проектов?</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M492.29 127.07C492.29 126.19 493 125.47 493.89 125.47L591.12 125.47 591.12 125.47C592 125.47 592.72 126.19 592.72 127.07 592.72 127.07 592.72 127.07 592.72 127.07L592.72 133.47 592.72 133.47C592.72 134.35 592 135.07 591.12 135.07L493.89 135.07 493.89 135.07C493 135.07 492.29 134.35 492.29 133.47z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M492.29 127.07C492.29 126.19 493 125.47 493.89 125.47L591.12 125.47 591.12 125.47C592 125.47 592.72 126.19 592.72 127.07 592.72 127.07 592.72 127.07 592.72 127.07L592.72 133.47 592.72 133.47C592.72 134.35 592 135.07 591.12 135.07L493.89 135.07 493.89 135.07C493 135.07 492.29 134.35 492.29 133.47z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.9567, 129.54247)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.670906" y="3.849152">
                        <tspan x="15.670906" y="3.849152"><?=$answer2_1?> (<?=$p2_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.97 138.52C491.97 137.64 492.69 136.92 493.57 136.92L591.27 136.92 591.27 136.92C592.15 136.92 592.87 137.64 592.87 138.52 592.87 138.52 592.87 138.52 592.87 138.52L592.87 144.92 592.87 144.92C592.87 145.8 592.15 146.52 591.27 146.52L493.57 146.52 493.57 146.52C492.69 146.52 491.97 145.8 491.97 144.92z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.97 138.52C491.97 137.64 492.69 136.92 493.57 136.92L591.27 136.92 591.27 136.92C592.15 136.92 592.87 137.64 592.87 138.52 592.87 138.52 592.87 138.52 592.87 138.52L592.87 144.92 592.87 144.92C592.87 145.8 592.15 146.52 591.27 146.52L493.57 146.52 493.57 146.52C492.69 146.52 491.97 145.8 491.97 144.92z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.64102, 140.99126)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.904465" y="3.8512564">
                        <tspan x="15.904465" y="3.8512564"><?=$answer2_2?> (<?=$p2_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.41 150.47C491.41 149.68 492.05 149.03 492.85 149.03L591.7 149.03 591.7 149.03C592.49 149.03 593.14 149.68 593.14 150.47 593.14 150.47 593.14 150.47 593.14 150.47L593.14 156.24 593.14 156.24C593.14 157.04 592.49 157.68 591.7 157.68L492.85 157.68 492.85 157.68C492.05 157.68 491.41 157.04 491.41 156.24z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.41 150.47C491.41 149.68 492.05 149.03 492.85 149.03L591.7 149.03 591.7 149.03C592.49 149.03 593.14 149.68 593.14 150.47 593.14 150.47 593.14 150.47 593.14 150.47L593.14 156.24 593.14 156.24C593.14 157.04 592.49 157.68 591.7 157.68L492.85 157.68 492.85 157.68C492.05 157.68 491.41 157.04 491.41 156.24z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.0295, 153.05463)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="16.36919" y="3.4244685">
                        <tspan x="16.36919" y="3.4244685"><?=$answer2_3?> (<?=$p2_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.97 161.48C491.97 160.61 492.68 159.91 493.55 159.91L591.29 159.91 591.29 159.91C592.16 159.91 592.87 160.61 592.87 161.48 592.87 161.48 592.87 161.48 592.87 161.48L592.87 167.79 592.87 167.79C592.87 168.66 592.16 169.36 591.29 169.36L493.55 169.36 493.55 169.36C492.68 169.36 491.97 168.66 491.97 167.79z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.97 161.48C491.97 160.61 492.68 159.91 493.55 159.91L591.29 159.91 591.29 159.91C592.16 159.91 592.87 160.61 592.87 161.48 592.87 161.48 592.87 161.48 592.87 161.48L592.87 167.79 592.87 167.79C592.87 168.66 592.16 169.36 591.29 169.36L493.55 169.36 493.55 169.36C492.68 169.36 491.97 168.66 491.97 167.79z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.634, 163.97014)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="15.911503" y="3.7871342">
                        <tspan x="15.911503" y="3.7871342"><?=$answer2_4?> (<?=$p2_4?>%)</tspan>
                    </text></g>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M-0 213.97C-0 206.73 5.87 200.86 13.11 200.86L706.89 200.86 706.89 200.86C714.13 200.86 720 206.73 720 213.97 720 213.97 720 213.97 720 213.97L720 266.41 720 266.41C720 273.65 714.13 279.51 706.89 279.51L13.11 279.51 13.11 279.51C5.87 279.51 0 273.65 0 266.41z">
                </path>
                <path fill="#DEEBF7"
                    d="M11.9 233.4C11.9 232.48 12.64 231.74 13.55 231.74L478.14 231.74 478.14 231.74C479.05 231.74 479.79 232.48 479.79 233.4 479.79 233.4 479.79 233.4 479.79 233.4L479.79 240.01 479.79 240.01C479.79 240.93 479.05 241.67 478.14 241.67L13.55 241.67 13.55 241.67C12.64 241.67 11.9 240.93 11.9 240.01z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.9 233.4C11.9 232.48 12.64 231.74 13.55 231.74L478.14 231.74 478.14 231.74C479.05 231.74 479.79 232.48 479.79 233.4 479.79 233.4 479.79 233.4 479.79 233.4L479.79 240.01 479.79 240.01C479.79 240.93 479.05 241.67 478.14 241.67L13.55 241.67 13.55 241.67C12.64 241.67 11.9 240.93 11.9 240.01z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.580383, 235.8269)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="4.0000744">
                        <tspan x="0" y="4.0000744">ГАС «Управление»</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M11.31 245.14C11.31 244.26 12.02 243.55 12.89 243.55L478.27 243.55 478.27 243.55C479.14 243.55 479.85 244.26 479.85 245.14 479.85 245.14 479.85 245.14 479.85 245.14L479.85 251.46 479.85 251.46C479.85 252.33 479.14 253.04 478.27 253.04L12.89 253.04 12.89 253.04C12.02 253.04 11.31 252.33 11.31 251.46z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M11.31 245.14C11.31 244.26 12.02 243.55 12.89 243.55L478.27 243.55 478.27 243.55C479.14 243.55 479.85 244.26 479.85 245.14 479.85 245.14 479.85 245.14 479.85 245.14L479.85 251.46 479.85 251.46C479.85 252.33 479.14 253.04 478.27 253.04L12.89 253.04 12.89 253.04C12.02 253.04 11.31 252.33 11.31 251.46z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.971725, 247.61748)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="0" y="3.8029633">
                        <tspan x="0" y="3.8029633">ГИИС «Электронный бюджет»</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.29 256.43C11.29 255.62 11.95 254.96 12.76 254.96L479 254.96 479 254.96C479.81 254.96 480.47 255.62 480.47 256.43 480.47 256.43 480.47 256.43 480.47 256.43L480.47 262.33 480.47 262.33C480.47 263.15 479.81 263.81 479 263.81L12.76 263.81 12.76 263.81C11.95 263.81 11.29 263.15 11.29 262.33z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.29 256.43C11.29 255.62 11.95 254.96 12.76 254.96L479 254.96 479 254.96C479.81 254.96 480.47 255.62 480.47 256.43 480.47 256.43 480.47 256.43 480.47 256.43L480.47 262.33 480.47 262.33C480.47 263.15 479.81 263.81 479 263.81L12.76 263.81 12.76 263.81C11.95 263.81 11.29 263.15 11.29 262.33z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.91858, 258.9888)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="3.5161858">
                        <tspan x="0" y="3.5161858">Единая информационная система в сфере закупок (ЕИС)</tspan>
                        <tspan xml:space="preserve" x="276.56543" y="3.5161858"> </tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.31 267.71C11.31 266.81 12.04 266.08 12.94 266.08L478.22 266.08 478.22 266.08C479.12 266.08 479.85 266.81 479.85 267.71 479.85 267.71 479.85 267.71 479.85 267.71L479.85 274.23 479.85 274.23C479.85 275.13 479.12 275.86 478.22 275.86L12.94 275.86 12.94 275.86C12.04 275.86 11.31 275.13 11.31 274.23z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.31 267.71C11.31 266.81 12.04 266.08 12.94 266.08L478.22 266.08 478.22 266.08C479.12 266.08 479.85 266.81 479.85 267.71 479.85 267.71 479.85 267.71 479.85 267.71L479.85 274.23 479.85 274.23C479.85 275.13 479.12 275.86 478.22 275.86L12.94 275.86 12.94 275.86C12.04 275.86 11.31 275.13 11.31 274.23z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.986115, 270.1592)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="3.9359407">
                        <tspan x="0" y="3.9359407">КМУИП</tspan>
                    </text></g>
                <path fill="#9DC3E6"
                    d="M10.7 209.24C10.7 207.05 12.48 205.27 14.67 205.27L705.67 205.27 705.67 205.27C707.86 205.27 709.64 207.05 709.64 209.24 709.64 209.24 709.64 209.24 709.64 209.24L709.64 225.13 709.64 225.13C709.64 227.32 707.86 229.1 705.67 229.1L14.67 229.1 14.67 229.1C12.48 229.1 10.7 227.32 10.7 225.13z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 209.24C10.7 207.05 12.48 205.27 14.67 205.27L705.67 205.27 705.67 205.27C707.86 205.27 709.64 207.05 709.64 209.24 709.64 209.24 709.64 209.24 709.64 209.24L709.64 225.13 709.64 225.13C709.64 227.32 707.86 229.1 705.67 229.1L14.67 229.1 14.67 229.1C12.48 229.1 10.7 227.32 10.7 225.13z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.061554, 210.0334)"><text stroke="#000000" stroke-width="0.24pt"
                        font-family="Lucida Console" font-style="italic" font-weight="normal" font-stretch="normal"
                        font-size="7.875pt" fill="#000000" x="0" y="17.094944">
                        <tspan x="0" y="4.4949408">3. В какой государственной информационной системе проводится анализ
                            реализации национальных, федеральных и</tspan>
                        <tspan xml:space="preserve" x="675.75" y="4.4949408"> </tspan>
                        <tspan x="0" y="17.094944">региональных проектов?</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.16 233.97C491.16 233.25 491.74 232.66 492.47 232.66L591.25 232.66 591.25 232.66C591.97 232.66 592.56 233.25 592.56 233.97 592.56 233.97 592.56 233.97 592.56 233.97L592.56 239.22 592.56 239.22C592.56 239.95 591.97 240.53 591.25 240.53L492.47 240.53 492.47 240.53C491.74 240.53 491.16 239.95 491.16 239.22z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.16 233.97C491.16 233.25 491.74 232.66 492.47 232.66L591.25 232.66 591.25 232.66C591.97 232.66 592.56 233.25 592.56 233.97 592.56 233.97 592.56 233.97 592.56 233.97L592.56 239.22 592.56 239.22C592.56 239.95 591.97 240.53 591.25 240.53L492.47 240.53 492.47 240.53C491.74 240.53 491.16 239.95 491.16 239.22z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 498.7418, 236.64693)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="16.242237" y="3.072771">
                        <tspan x="14.242237" y="3.072771"><?=$answer3_1?> (<?=$p3_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M490.84 245.4C490.84 244.67 491.43 244.08 492.15 244.08L591.4 244.08 591.4 244.08C592.13 244.08 592.72 244.67 592.72 245.4 592.72 245.4 592.72 245.4 592.72 245.4L592.72 250.65 592.72 250.65C592.72 251.37 592.13 251.96 591.4 251.96L492.15 251.96 492.15 251.96C491.43 251.96 490.84 251.37 490.84 250.65z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M490.84 245.4C490.84 244.67 491.43 244.08 492.15 244.08L591.4 244.08 591.4 244.08C592.13 244.08 592.72 244.67 592.72 245.4 592.72 245.4 592.72 245.4 592.72 245.4L592.72 250.65 592.72 250.65C592.72 251.37 592.13 251.96 591.4 251.96L492.15 251.96 492.15 251.96C491.43 251.96 490.84 251.37 490.84 250.65z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 498.4261, 248.06873)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="16.478096" y="3.0745487">
                        <tspan x="14.478096" y="3.0745487"><?=$answer3_2?> (<?=$p3_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M490.28 257.18C490.28 256.53 490.81 256 491.46 256L591.81 256 591.81 256C592.47 256 593 256.53 593 257.18 593 257.18 593 257.18 593 257.18L593 261.91 593 261.91C593 262.57 592.47 263.09 591.81 263.09L491.46 263.09C490.81 263.09 490.28 262.57 490.28 261.91z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M490.28 257.18C490.28 256.53 490.81 256 491.46 256L591.81 256 591.81 256C592.47 256 593 256.53 593 257.18 593 257.18 593 257.18 593 257.18L593 261.91 593 261.91C593 262.57 592.47 263.09 591.81 263.09L491.46 263.09C490.81 263.09 490.28 262.57 490.28 261.91z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 497.8228, 259.9435)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="14.2511215" y="2.7242804">
                        <tspan x="14.2511215" y="2.7242804"><?=$answer3_3?> (<?=$p3_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M490.84 268.28C490.84 267.57 491.42 266.99 492.13 266.99L591.42 266.99 591.42 266.99C592.14 266.99 592.72 267.57 592.72 268.28 592.72 268.28 592.72 268.28 592.72 268.28L592.72 273.45 592.72 273.45C592.72 274.17 592.14 274.75 591.42 274.75L492.13 274.75 492.13 274.75C491.42 274.75 490.84 274.17 490.84 273.45z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M490.84 268.28C490.84 267.57 491.42 266.99 492.13 266.99L591.42 266.99 591.42 266.99C592.14 266.99 592.72 267.57 592.72 268.28 592.72 268.28 592.72 268.28 592.72 268.28L592.72 273.45 592.72 273.45C592.72 274.17 592.14 274.75 591.42 274.75L492.13 274.75 492.13 274.75C491.42 274.75 490.84 274.17 490.84 273.45z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 498.4202, 270.96768)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.796429" y="3.021891">
                        <tspan x="13.796429" y="3.021891"><?=$answer3_4?> (<?=$p3_4?>%)</tspan>
                    </text></g>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M-0 328.6C-0 319.01 7.78 311.24 17.37 311.24L702.63 311.24 702.63 311.24C712.22 311.24 720 319.01 720 328.6 720 328.6 720 328.6 720 328.6L720 398.07 720 398.07C720 407.66 712.22 415.44 702.63 415.44L17.37 415.44 17.37 415.44C7.78 415.44 0 407.66 -0 398.07z">
                </path>
                <path fill="#DEEBF7"
                    d="M11.29 330.48C11.29 329.62 11.99 328.91 12.86 328.91L473.68 328.91 473.68 328.91C474.55 328.91 475.25 329.62 475.25 330.48 475.25 330.48 475.25 330.48 475.25 330.48L475.25 336.76 475.25 336.76C475.25 337.63 474.55 338.33 473.68 338.33L12.86 338.33C11.99 338.33 11.29 337.63 11.29 336.76z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.29 330.48C11.29 329.62 11.99 328.91 12.86 328.91L473.68 328.91 473.68 328.91C474.55 328.91 475.25 329.62 475.25 330.48 475.25 330.48 475.25 330.48 475.25 330.48L475.25 336.76 475.25 336.76C475.25 337.63 474.55 338.33 473.68 338.33L12.86 338.33C11.99 338.33 11.29 337.63 11.29 336.76z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.945984, 332.97342)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="3.7701573">
                        <tspan x="0" y="3.7701573">Нет принципиальной разницы (показатели и результаты проекта - это
                            одно и тоже)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M10.7 345.42C10.7 343.34 12.38 341.66 14.45 341.66L471.55 341.66 471.55 341.66C473.62 341.66 475.3 343.34 475.3 345.42 475.3 345.42 475.3 345.42 475.3 345.42L475.3 360.44 475.3 360.44C475.3 362.51 473.62 364.2 471.55 364.2L14.45 364.2 14.45 364.2C12.38 364.2 10.7 362.51 10.7 360.44z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 345.42C10.7 343.34 12.38 341.66 14.45 341.66L471.55 341.66 471.55 341.66C473.62 341.66 475.3 343.34 475.3 345.42 475.3 345.42 475.3 345.42 475.3 345.42L475.3 360.44 475.3 360.44C475.3 362.51 473.62 364.2 471.55 364.2L14.45 364.2 14.45 364.2C12.38 364.2 10.7 362.51 10.7 360.44z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.998169, 346.36118)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="15.088879">
                        <tspan x="0" y="4.2888775">Результат проекта – это денежное выражение моей оплаты труда после
                            реализации</tspan>
                        <tspan xml:space="preserve" x="417.55957" y="4.2888775"> </tspan>
                        <tspan x="0" y="15.088879">проекта, показатель – количество проектов, участником которых я
                            являюсь</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M10.67 372.81C10.67 370.13 12.85 367.95 15.54 367.95L471.05 367.95 471.05 367.95C473.74 367.95 475.92 370.13 475.92 372.81 475.92 372.81 475.92 372.81 475.92 372.81L475.92 392.26 475.92 392.26C475.92 394.95 473.74 397.12 471.05 397.12L15.54 397.12 15.54 397.12C12.85 397.12 10.67 394.95 10.67 392.26z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M10.67 372.81C10.67 370.13 12.85 367.95 15.54 367.95L471.05 367.95 471.05 367.95C473.74 367.95 475.92 370.13 475.92 372.81 475.92 372.81 475.92 372.81 475.92 372.81L475.92 392.26 475.92 392.26C475.92 394.95 473.74 397.12 471.05 397.12L15.54 397.12 15.54 397.12C12.85 397.12 10.67 394.95 10.67 392.26z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.29918, 372.9723)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="5.91pt" fill="#000000"
                        x="0" y="21.753017">
                        <tspan x="0" y="2.8410182">Показатели отражают эффективность реализации проекта (на сколько
                            успешно идет выполнение</tspan>
                        <tspan xml:space="preserve" x="446.3129" y="2.8410182"> </tspan>
                        <tspan x="0" y="12.297017">задач проекта), результаты – отражают конкретные итоги выполненных работ по
                            проекту</tspan>
                        <tspan xml:space="preserve" x="427.32083" y="12.297017"> </tspan>
                        <tspan x="0" y="21.753017"> (какой объем услуг (товаров и работ) был выполнен)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M10.7 403.29C10.7 402.44 11.39 401.75 12.24 401.75L473.75 401.75 473.75 401.75C474.61 401.75 475.3 402.44 475.3 403.29 475.3 403.29 475.3 403.29 475.3 403.29L475.3 409.48 475.3 409.48C475.3 410.34 474.61 411.03 473.75 411.03L12.24 411.03 12.24 411.03C11.39 411.03 10.7 410.34 10.7 409.48z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 403.29C10.7 402.44 11.39 401.75 12.24 401.75L473.75 401.75 473.75 401.75C474.61 401.75 475.3 402.44 475.3 403.29 475.3 403.29 475.3 403.29 475.3 403.29L475.3 409.48 475.3 409.48C475.3 410.34 474.61 411.03 473.75 411.03L12.24 411.03 12.24 411.03C11.39 411.03 10.7 410.34 10.7 409.48z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.350937, 405.80118)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="3.7092829">
                        <tspan x="0" y="3.7092829">Первый раз слышу о таких понятиях, в проектной деятельности не
                            участвовал</tspan>
                    </text></g>
                <path fill="#9DC3E6"
                    d="M10.7 315.68C10.7 314.66 11.52 313.83 12.54 313.83L707.8 313.83 707.8 313.83C708.82 313.83 709.64 314.66 709.64 315.68 709.64 315.68 709.64 315.68 709.64 315.68L709.64 323.06 709.64 323.06C709.64 324.08 708.82 324.91 707.8 324.91L12.54 324.91 12.54 324.91C11.52 324.91 10.7 324.08 10.7 323.06z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 315.68C10.7 314.66 11.52 313.83 12.54 313.83L707.8 313.83 707.8 313.83C708.82 313.83 709.64 314.66 709.64 315.68 709.64 315.68 709.64 315.68 709.64 315.68L709.64 323.06 709.64 323.06C709.64 324.08 708.82 324.91 707.8 324.91L12.54 324.91 12.54 324.91C11.52 324.91 10.7 324.08 10.7 323.06z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.43872, 317.97433)"><text stroke="#000000" stroke-width="0.24pt"
                        font-family="Lucida Console" font-style="italic" font-weight="normal" font-stretch="normal"
                        font-size="7.875pt" fill="#000000" x="0" y="5.0382533">
                        <tspan x="0" y="5.0382533">4. В чем принципиальное отличие результатов и показателей
                            национального проекта?</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.72 330.92C491.72 330.05 492.43 329.35 493.29 329.35L591.4 329.35 591.4 329.35C592.27 329.35 592.97 330.05 592.97 330.92 592.97 330.92 592.97 330.92 592.97 330.92L592.97 337.2 592.97 337.19C592.97 338.06 592.27 338.76 591.4 338.76L493.29 338.76 493.29 338.76C492.43 338.76 491.72 338.06 491.72 337.2z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.72 330.92C491.72 330.05 492.43 329.35 493.29 329.35L591.4 329.35 591.4 329.35C592.27 329.35 592.97 330.05 592.97 330.92 592.97 330.92 592.97 330.92 592.97 330.92L592.97 337.2 592.97 337.19C592.97 338.06 592.27 338.76 591.4 338.76L493.29 338.76 493.29 338.76C492.43 338.76 491.72 338.06 491.72 337.2z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.3829, 333.4061)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.401302" y="3.7713604">
                        <tspan x="13.401302" y="3.7713604"><?=$answer4_1?> (<?=$p4_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.41 345.4C491.41 343.33 493.08 341.66 495.14 341.66L589.39 341.66 589.39 341.66C591.45 341.66 593.13 343.33 593.13 345.4 593.13 345.4 593.13 345.4 593.13 345.4L593.13 360.34 593.13 360.34C593.13 362.4 591.45 364.08 589.39 364.08L495.14 364.08 495.14 364.08C493.08 364.08 491.41 362.4 491.41 360.34z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.41 345.4C491.41 343.33 493.08 341.66 495.14 341.66L589.39 341.66 589.39 341.66C591.45 341.66 593.13 343.33 593.13 345.4 593.13 345.4 593.13 345.4 593.13 345.4L593.13 360.34 593.13 360.34C593.13 362.4 591.45 364.08 589.39 364.08L495.14 364.08 495.14 364.08C493.08 364.08 491.41 362.4 491.41 360.34z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.70145, 346.3554)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.002567" y="9.635284">
                        <tspan x="13.002567" y="9.635284"><?=$answer4_2?> (<?=$p4_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M490.84 373.44C490.84 370.77 493.01 368.6 495.68 368.6L588.57 368.6 588.57 368.6C591.24 368.6 593.4 370.77 593.4 373.44 593.4 373.44 593.4 373.44 593.4 373.44L593.4 392.79 593.4 392.79C593.4 395.46 591.24 397.62 588.57 397.62L495.68 397.62C493.01 397.62 490.84 395.46 490.84 392.79z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M490.84 373.44C490.84 370.77 493.01 368.6 495.68 368.6L588.57 368.6 588.57 368.6C591.24 368.6 593.4 370.77 593.4 373.44 593.4 373.44 593.4 373.44 593.4 373.44L593.4 392.79 593.4 392.79C593.4 395.46 591.24 397.62 588.57 397.62L495.68 397.62C493.01 397.62 490.84 395.46 490.84 392.79z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.4582, 373.62033)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.102123" y="12.615345">
                        <tspan x="13.102123" y="12.615345"><?=$answer4_3?> (<?=$p4_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M490.84 403.83C490.84 402.98 491.53 402.28 492.39 402.28L591.01 402.28 591.01 402.28C591.87 402.28 592.56 402.98 592.56 403.83 592.56 403.83 592.56 403.83 592.56 403.83L592.56 410.02 592.56 410.02C592.56 410.87 591.87 411.57 591.01 411.57L492.39 411.57 492.39 411.57C491.53 411.57 490.84 410.87 490.84 410.02z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M490.84 403.83C490.84 402.98 491.53 402.28 492.39 402.28L591.01 402.28 591.01 402.28C591.87 402.28 592.56 402.98 592.56 403.83 592.56 403.83 592.56 403.83 592.56 403.83L592.56 410.02 592.56 410.02C592.56 410.87 591.87 411.57 591.01 411.57L492.39 411.57 492.39 411.57C491.53 411.57 490.84 410.87 490.84 410.02z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 498.49472, 406.33572)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.643734" y="3.7104697">
                        <tspan x="13.643734" y="3.7104697"><?=$answer4_4?> (<?=$p4_4?>%)</tspan>
                    </text></g>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M-0 456.15C-0 448.39 6.3 442.09 14.06 442.09L705.94 442.09 705.94 442.09C713.7 442.09 720 448.39 720 456.15 720 456.15 720 456.15 720 456.15L720 512.41 720 512.41C720 520.18 713.7 526.48 705.94 526.48L14.06 526.48 14.06 526.48C6.3 526.48 0 520.18 -0 512.41z">
                </path>
                <path fill="#DEEBF7"
                    d="M12.48 463.27C12.48 462.32 13.25 461.55 14.2 461.55L474.1 461.55 474.1 461.55C475.05 461.55 475.82 462.32 475.82 463.27 475.82 463.27 475.82 463.27 475.82 463.27L475.82 470.12 475.82 470.12C475.82 471.07 475.05 471.83 474.1 471.83L14.2 471.83C13.25 471.83 12.48 471.07 12.48 470.12z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M12.48 463.27C12.48 462.32 13.25 461.55 14.2 461.55L474.1 461.55 474.1 461.55C475.05 461.55 475.82 462.32 475.82 463.27 475.82 463.27 475.82 463.27 475.82 463.27L475.82 470.12 475.82 470.12C475.82 471.07 475.05 471.83 474.1 471.83L14.2 471.83C13.25 471.83 12.48 471.07 12.48 470.12z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 20.184296, 465.6544)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="4.160248">
                        <tspan x="0" y="4.160248">КТ – это компьютерный томограф</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.9 477.23C11.9 476.32 12.63 475.59 13.53 475.59L474.23 475.59 474.23 475.59C475.13 475.59 475.87 476.32 475.87 477.23 475.87 477.23 475.87 477.23 475.87 477.23L475.87 483.78 475.87 483.78C475.87 484.68 475.13 485.42 474.23 485.42L13.53 485.42 13.53 485.42C12.63 485.42 11.9 484.68 11.9 483.78z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.9 477.23C11.9 476.32 12.63 475.59 13.53 475.59L474.23 475.59 474.23 475.59C475.13 475.59 475.87 476.32 475.87 477.23 475.87 477.23 475.87 477.23 475.87 477.23L475.87 483.78 475.87 483.78C475.87 484.68 475.13 485.42 474.23 485.42L13.53 485.42 13.53 485.42C12.63 485.42 11.9 484.68 11.9 483.78z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.575699, 479.66766)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="0" y="3.9560752">
                        <tspan x="0" y="3.9560752">КТ – это срок окончания проекта</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M11.87 492.4C11.87 490.6 13.33 489.14 15.13 489.14L473.23 489.14 473.23 489.14C475.03 489.14 476.48 490.6 476.48 492.4 476.48 492.4 476.48 492.4 476.48 492.4L476.48 505.41 476.48 505.41C476.48 507.2 475.03 508.66 473.23 508.66L15.13 508.66 15.13 508.66C13.33 508.66 11.87 507.2 11.87 505.41z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M11.87 492.4C11.87 490.6 13.33 489.14 15.13 489.14L473.23 489.14 473.23 489.14C475.03 489.14 476.48 490.6 476.48 492.4 476.48 492.4 476.48 492.4 476.48 492.4L476.48 505.41 476.48 505.41C476.48 507.2 475.03 508.66 473.23 508.66L15.13 508.66 15.13 508.66C13.33 508.66 11.87 507.2 11.87 505.41z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 20.027374, 493.69537)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="0" y="13.728256">
                        <tspan x="0" y="2.928255">КТ – это конкретная дата (срок окончания мероприятия (результата),
                            которая</tspan>
                        <tspan xml:space="preserve" x="401.29102" y="2.928255"> </tspan>
                        <tspan x="0" y="13.728256">позволяет контролировать процесс реализации проекта</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M11.9 513.88C11.9 512.95 12.65 512.19 13.58 512.19L474.18 512.19 474.18 512.19C475.11 512.19 475.87 512.95 475.87 513.88 475.87 513.88 475.87 513.88 475.87 513.88L475.87 520.64 475.87 520.64C475.87 521.57 475.11 522.33 474.18 522.33L13.58 522.33 13.58 522.33C12.65 522.33 11.9 521.57 11.9 520.64z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M11.9 513.88C11.9 512.95 12.65 512.19 13.58 512.19L474.18 512.19 474.18 512.19C475.11 512.19 475.87 512.95 475.87 513.88 475.87 513.88 475.87 513.88 475.87 513.88L475.87 520.64 475.87 520.64C475.87 521.57 475.11 522.33 474.18 522.33L13.58 522.33 13.58 522.33C12.65 522.33 11.9 521.57 11.9 520.64z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 19.590378, 516.28815)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0" y="4.093762">
                        <tspan x="0" y="4.093762">Первый раз слышу о понятии, в проектной деятельности не участвовал</tspan>
                    </text></g>
                <path fill="#9DC3E6"
                    d="M10.7 447.16C10.7 445.94 11.69 444.95 12.91 444.95L707.43 444.95 707.43 444.95C708.65 444.95 709.64 445.94 709.64 447.16 709.64 447.16 709.64 447.16 709.64 447.16L709.64 456.01 709.64 456.01C709.64 457.23 708.65 458.22 707.43 458.22L12.91 458.22C11.69 458.22 10.7 457.23 10.7 456.01z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M10.7 447.16C10.7 445.94 11.69 444.95 12.91 444.95L707.43 444.95 707.43 444.95C708.65 444.95 709.64 445.94 709.64 447.16 709.64 447.16 709.64 447.16 709.64 447.16L709.64 456.01 709.64 456.01C709.64 457.23 708.65 458.22 707.43 458.22L12.91 458.22C11.69 458.22 10.7 457.23 10.7 456.01z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 18.545868, 449.19653)"><text stroke="#000000" stroke-width="0.24pt"
                        font-family="Lucida Console" font-style="italic" font-weight="normal" font-stretch="normal"
                        font-size="7.875pt" fill="#000000" x="0" y="6.0286636">
                        <tspan x="0" y="6.0286636">5. Что представляет собой контрольная точка проекта (КТ):</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M492.29 463.18C492.29 462.22 493.07 461.44 494.02 461.44L590.67 461.44 590.67 461.44C591.63 461.44 592.41 462.22 592.41 463.18 592.41 463.18 592.41 463.18 592.41 463.18L592.41 470.12 592.41 470.12C592.41 471.07 591.63 471.85 590.67 471.85L494.02 471.85 494.02 471.85C493.07 471.85 492.29 471.07 492.29 470.12z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M492.29 463.18C492.29 462.22 493.07 461.44 494.02 461.44L590.67 461.44 590.67 461.44C591.63 461.44 592.41 462.22 592.41 463.18 592.41 463.18 592.41 463.18 592.41 463.18L592.41 470.12 592.41 470.12C592.41 471.07 591.63 471.85 590.67 471.85L494.02 471.85 494.02 471.85C493.07 471.85 492.29 471.07 492.29 470.12z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.99673, 465.5484)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="18.165085" y="4.2193003">
                        <tspan x="12.165085" y="4.2193003"><?=$answer5_1?> (<?=$p5_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.97 476.74C491.97 475.78 492.75 475 493.71 475L590.82 475 590.82 475C591.78 475 592.56 475.78 592.56 476.74 592.56 476.74 592.56 476.74 592.56 476.74L592.56 483.68 592.56 483.68C592.56 484.64 591.78 485.42 590.82 485.42L493.71 485.42C492.75 485.42 491.97 484.64 491.97 483.68z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.97 476.74C491.97 475.78 492.75 475 493.71 475L590.82 475 590.82 475C591.78 475 592.56 475.78 592.56 476.74 592.56 476.74 592.56 476.74 592.56 476.74L592.56 483.68 592.56 483.68C592.56 484.64 591.78 485.42 590.82 485.42L493.71 485.42C492.75 485.42 491.97 484.64 491.97 483.68z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.68097, 479.10794)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.022915" y="4.2215686">
                        <tspan x="13.022915" y="4.2215686"><?=$answer5_2?> (<?=$p5_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.41 492.55C491.41 490.86 492.78 489.5 494.46 489.5L589.77 489.5 589.77 489.5C591.46 489.5 592.83 490.86 592.83 492.55 592.83 492.55 592.83 492.55 592.83 492.55L592.83 504.78 592.83 504.78C592.83 506.47 591.46 507.84 589.77 507.84L494.46 507.84 494.46 507.84C492.78 507.84 491.41 506.47 491.41 504.78z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.41 492.55C491.41 490.86 492.78 489.5 494.46 489.5L589.77 489.5 589.77 489.5C591.46 489.5 592.83 490.86 592.83 492.55 592.83 492.55 592.83 492.55 592.83 492.55L592.83 504.78 592.83 504.78C592.83 506.47 591.46 507.84 589.77 507.84L494.46 507.84 494.46 507.84C492.78 507.84 491.41 506.47 491.41 504.78z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.50256, 493.99142)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.053223" y="7.798146">
                        <tspan x="13.053223" y="7.798146"><?=$answer5_3?> (<?=$p5_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M491.41 513.68C491.41 512.73 492.17 511.97 493.12 511.97L590.28 511.97 590.28 511.97C591.23 511.97 591.99 512.73 591.99 513.68 591.99 513.68 591.99 513.68 591.99 513.68L591.99 520.52 591.99 520.52C591.99 521.46 591.23 522.23 590.28 522.23L493.12 522.23 493.12 522.23C492.17 522.23 491.41 521.46 491.41 520.52z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M491.41 513.68C491.41 512.73 492.17 511.97 493.12 511.97L590.28 511.97 590.28 511.97C591.23 511.97 591.99 512.73 591.99 513.68 591.99 513.68 591.99 513.68 591.99 513.68L591.99 520.52 591.99 520.52C591.99 521.46 591.23 522.23 590.28 522.23L493.12 522.23 493.12 522.23C492.17 522.23 491.41 521.46 491.41 520.52z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 499.10782, 516.06903)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#0070C0"
                        x="13.030552" y="4.1519456">
                        <tspan x="13.030552" y="4.1519456"><?=$answer5_4?> (<?=$p5_4?>%)</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M606.3 21.51C606.3 20.48 607.14 19.64 608.17 19.64L689.25 19.64 689.25 19.64C690.28 19.64 691.12 20.48 691.12 21.51 691.12 21.51 691.12 21.51 691.12 21.51L691.12 28.98 691.12 28.98C691.12 30.01 690.28 30.85 689.25 30.85L608.17 30.85C607.14 30.85 606.3 30.01 606.3 28.98z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M606.3 21.51C606.3 20.48 607.14 19.64 608.17 19.64L689.25 19.64 689.25 19.64C690.28 19.64 691.12 20.48 691.12 21.51 691.12 21.51 691.12 21.51 691.12 21.51L691.12 28.98 691.12 28.98C691.12 30.01 690.28 30.85 689.25 30.85L608.17 30.85C607.14 30.85 606.3 30.01 606.3 28.98z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 614.04944, 23.786066)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="10.0996666" y="4.5791154">
                        <tspan x="10.0996666" y="4.5791154"><?=$a_answer1_1?> (<?=$a_p1_1?>%)</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M606.39 127.74C606.39 126.76 607.18 125.97 608.16 125.97L689.2 125.97 689.2 125.97C690.18 125.97 690.97 126.76 690.97 127.74 690.97 127.74 690.97 127.74 690.97 127.74L690.97 134.81 690.97 134.81C690.97 135.79 690.18 136.58 689.2 136.58L608.16 136.58 608.16 136.58C607.18 136.58 606.39 135.79 606.39 134.81z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M606.39 127.74C606.39 126.76 607.18 125.97 608.16 125.97L689.2 125.97 689.2 125.97C690.18 125.97 690.97 126.76 690.97 127.74 690.97 127.74 690.97 127.74 690.97 127.74L690.97 134.81 690.97 134.81C690.97 135.79 690.18 136.58 689.2 136.58L608.16 136.58 608.16 136.58C607.18 136.58 606.39 135.79 606.39 134.81z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 614.1084, 130.08525)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="10.010563" y="4.311744">
                        <tspan x="10.010563" y="4.311744"><?=$a_answer2_1?> (<?=$a_p2_1?>%)</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M606.3 245.77C606.3 244.84 607.06 244.08 607.99 244.08L689.28 244.08 689.28 244.08C690.21 244.08 690.96 244.84 690.96 245.77 690.96 245.77 690.96 245.77 690.96 245.77L690.96 252.52 690.96 252.52C690.96 253.46 690.21 254.21 689.28 254.21L607.99 254.21 607.99 254.21C607.06 254.21 606.3 253.46 606.3 252.52z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M606.3 245.77C606.3 244.84 607.06 244.08 607.99 244.08L689.28 244.08 689.28 244.08C690.21 244.08 690.96 244.84 690.96 245.77 690.96 245.77 690.96 245.77 690.96 245.77L690.96 252.52 690.96 252.52C690.96 253.46 690.21 254.21 689.28 254.21L607.99 254.21 607.99 254.21C607.06 254.21 606.3 253.46 606.3 252.52z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.9965, 248.17874)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="10.0744324" y="4.091446">
                        <tspan x="8.0744324" y="4.091446"><?=$a_answer3_2?> (<?=$a_p3_2?>%)</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M607.61 372.81C607.61 370.33 609.62 368.32 612.1 368.32L684.35 368.32 684.35 368.32C686.83 368.32 688.84 370.33 688.84 372.81 688.84 372.81 688.84 372.81 688.84 372.81L688.84 390.77 688.84 390.76C688.84 393.24 686.83 395.25 684.35 395.25L612.1 395.25 612.1 395.25C609.62 395.25 607.61 393.24 607.61 390.77z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M607.61 372.81C607.61 370.33 609.62 368.32 612.1 368.32L684.35 368.32 684.35 368.32C686.83 368.32 688.84 370.33 688.84 372.81 688.84 372.81 688.84 372.81 688.84 372.81L688.84 390.77 688.84 390.76C688.84 393.24 686.83 395.25 684.35 395.25L612.1 395.25 612.1 395.25C609.62 395.25 607.61 393.24 607.61 390.77z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.9074, 370.2825)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="5.66849136" y="14.677963">
                        <tspan x="5.66849136" y="14.677963"><?=$a_answer4_3?> (<?=$a_p4_3?>%)</tspan>
                    </text></g>
                <path fill="#C5E0B4"
                    d="M607.87 492.13C607.87 490.39 609.28 488.99 611.01 488.99L686.69 488.99 686.69 488.99C688.42 488.99 689.83 490.39 689.83 492.13 689.83 492.13 689.83 492.13 689.83 492.13L689.83 504.7 689.83 504.7C689.83 506.43 688.42 507.84 686.69 507.84L611.01 507.84 611.01 507.84C609.28 507.84 607.87 506.43 607.87 504.7z">
                </path>
                <path stroke-width="1" stroke="#548235" fill="none"
                    d="M607.87 492.13C607.87 490.39 609.28 488.99 611.01 488.99L686.69 488.99 686.69 488.99C688.42 488.99 689.83 490.39 689.83 492.13 689.83 492.13 689.83 492.13 689.83 492.13L689.83 504.7 689.83 504.7C689.83 506.43 688.42 507.84 686.69 507.84L611.01 507.84 611.01 507.84C609.28 507.84 607.87 506.43 607.87 504.7z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.98883, 493.5074)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#000000"
                        x="0.6099434" y="8.02776">
                        <tspan x="5.6099434" y="8.02776"><?=$a_answer5_3?> (<?=$a_p5_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.14 33.86C606.14 32.83 606.98 31.99 608.01 31.99L689.49 31.99 689.49 31.99C690.52 31.99 691.36 32.83 691.36 33.86 691.36 33.86 691.36 33.86 691.36 33.86L691.36 41.34 691.36 41.34C691.36 42.37 690.52 43.2 689.49 43.2L608.01 43.2C606.98 43.2 606.14 42.37 606.14 41.34z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.14 33.86C606.14 32.83 606.98 31.99 608.01 31.99L689.49 31.99 689.49 31.99C690.52 31.99 691.36 32.83 691.36 33.86 691.36 33.86 691.36 33.86 691.36 33.86L691.36 41.34 691.36 41.34C691.36 42.37 690.52 43.2 689.49 43.2L608.01 43.2C606.98 43.2 606.14 42.37 606.14 41.34z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.89166, 36.13791)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.296837" y="4.581602">
                        <tspan x="5.296837" y="4.581602"></tspan>
                        <tspan x="10.671837" y="4.581602" textLength="54.228516" fill="#0070C0"><?=$a_answer1_2?> (<?=$a_p1_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M605.99 46.86C605.99 45.93 606.74 45.18 607.67 45.18L690.22 45.18 690.22 45.18C691.15 45.18 691.91 45.93 691.91 46.86 691.91 46.86 691.91 46.86 691.91 46.86L691.91 53.6 691.91 53.6C691.91 54.53 691.15 55.28 690.22 55.28L607.67 55.28 607.67 55.28C606.74 55.28 605.99 54.53 605.99 53.6z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M605.99 46.86C605.99 45.93 606.74 45.18 607.67 45.18L690.22 45.18 690.22 45.18C691.15 45.18 691.91 45.93 691.91 46.86 691.91 46.86 691.91 46.86 691.91 46.86L691.91 53.6 691.91 53.6C691.91 54.53 691.15 55.28 690.22 55.28L607.67 55.28 607.67 55.28C606.74 55.28 605.99 54.53 605.99 53.6z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.6797, 49.269066)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.7043037" y="4.082848">
                        <tspan x="5.7043037" y="4.082848"></tspan>
                        <tspan x="11.079304" y="4.082848" textLength="54.228516" fill="#0070C0"><?=$a_answer1_3?> (<?=$a_p1_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M605.99 58.57C605.99 57.55 606.81 56.72 607.83 56.72L689.36 56.72 689.36 56.72C690.38 56.72 691.2 57.55 691.2 58.57 691.2 58.57 691.2 58.57 691.2 58.57L691.2 65.93 691.2 65.93C691.2 66.95 690.38 67.77 689.36 67.77L607.83 67.77 607.83 67.77C606.81 67.77 605.99 66.95 605.99 65.93z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M605.99 58.57C605.99 57.55 606.81 56.72 607.83 56.72L689.36 56.72 689.36 56.72C690.38 56.72 691.2 57.55 691.2 58.57 691.2 58.57 691.2 58.57 691.2 58.57L691.2 65.93 691.2 65.93C691.2 66.95 690.38 67.77 689.36 67.77L607.83 67.77 607.83 67.77C606.81 67.77 605.99 66.95 605.99 65.93z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.72546, 60.86421)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.305065" y="4.506642">
                        <tspan x="5.305065" y="4.506642"></tspan>
                        <tspan x="10.680065" y="4.506642" textLength="54.228516" fill="#0070C0"><?=$a_answer1_4?> (<?=$a_p1_4?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.07 139.63C606.07 138.73 606.81 137.99 607.72 137.99L689.4 137.99 689.4 137.99C690.31 137.99 691.05 138.73 691.05 139.63 691.05 139.63 691.05 139.63 691.05 139.63L691.05 146.22 691.05 146.22C691.05 147.13 690.31 147.86 689.4 147.86L607.72 147.86C606.81 147.86 606.07 147.13 606.07 146.22z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.07 139.63C606.07 138.73 606.81 137.99 607.72 137.99L689.4 137.99 689.4 137.99C690.31 137.99 691.05 138.73 691.05 139.63 691.05 139.63 691.05 139.63 691.05 139.63L691.05 146.22 691.05 146.22C691.05 147.13 690.31 147.86 689.4 147.86L607.72 147.86C606.81 147.86 606.07 147.13 606.07 146.22z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.7563, 142.07117)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.2437057" y="3.9770155">
                        <tspan x="5.2437057" y="3.9770155"></tspan>
                        <tspan x="10.618706" y="3.9770155" textLength="54.228516" fill="#0070C0"><?=$a_answer2_2?> (<?=$a_p2_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.43 151.32C606.43 150.5 607.09 149.84 607.91 149.84L690.62 149.84 690.62 149.84C691.44 149.84 692.11 150.5 692.11 151.32 692.11 151.32 692.11 151.32 692.11 151.32L692.11 157.26 692.11 157.26C692.11 158.08 691.44 158.74 690.62 158.74L607.91 158.74 607.91 158.74C607.09 158.74 606.43 158.08 606.43 157.26z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.43 151.32C606.43 150.5 607.09 149.84 607.91 149.84L690.62 149.84 690.62 149.84C691.44 149.84 692.11 150.5 692.11 151.32 692.11 151.32 692.11 151.32 692.11 151.32L692.11 157.26 692.11 157.26C692.11 158.08 691.44 158.74 690.62 158.74L607.91 158.74 607.91 158.74C607.09 158.74 606.43 158.08 606.43 157.26z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 614.0612, 153.87436)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.6437416" y="3.5378394">
                        <tspan x="5.6437416" y="3.5378394"></tspan>
                        <tspan x="11.018742" y="3.5378394" textLength="54.228516" fill="#0070C0"><?=$a_answer2_3?> (<?=$a_p2_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.71 162.31C606.71 161.41 607.44 160.69 608.33 160.69L690.06 160.69 690.06 160.69C690.96 160.69 691.69 161.41 691.69 162.31 691.69 162.31 691.69 162.31 691.69 162.31L691.69 168.79 691.69 168.79C691.69 169.69 690.96 170.41 690.06 170.41L608.33 170.41 608.33 170.41C607.44 170.41 606.71 169.69 606.71 168.79z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.71 162.31C606.71 161.41 607.44 160.69 608.33 160.69L690.06 160.69 690.06 160.69C690.96 160.69 691.69 161.41 691.69 162.31 691.69 162.31 691.69 162.31 691.69 162.31L691.69 168.79 691.69 168.79C691.69 169.69 690.96 170.41 690.06 170.41L608.33 170.41 608.33 170.41C607.44 170.41 606.71 169.69 606.71 168.79z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 614.3843, 164.76111)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.2509193" y="3.9110432">
                        <tspan x="5.2509193" y="3.9110432"></tspan>
                        <tspan x="10.625919" y="3.9110432" textLength="54.228516" fill="#0070C0"><?=$a_answer2_4?> (<?=$a_p2_4?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.3 234.22C606.3 233.36 607 232.66 607.87 232.66L689.4 232.66 689.4 232.66C690.26 232.66 690.96 233.36 690.96 234.22 690.96 234.22 690.96 234.22 690.96 234.22L690.96 240.48 690.96 240.48C690.96 241.35 690.26 242.05 689.4 242.05L607.87 242.05 607.87 242.05C607 242.05 606.3 241.35 606.3 240.48z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.3 234.22C606.3 233.36 607 232.66 607.87 232.66L689.4 232.66 689.4 232.66C690.26 232.66 690.96 233.36 690.96 234.22 690.96 234.22 690.96 234.22 690.96 234.22L690.96 240.48 690.96 240.48C690.96 241.35 690.26 242.05 689.4 242.05L607.87 242.05 607.87 242.05C607 242.05 606.3 241.35 606.3 240.48z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.96063, 236.71379)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.110325" y="3.7597365">
                        <tspan x="5.110325" y="3.7597365"></tspan>
                        <tspan x="8.485325" y="3.7597365" textLength="54.228516" fill="#0070C0"><?=$a_answer3_1?> (<?=$a_p3_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.14 258.22C606.14 257.44 606.78 256.8 607.56 256.8L690.49 256.8 690.49 256.8C691.27 256.8 691.91 257.44 691.91 258.22 691.91 258.22 691.91 258.22 691.91 258.22L691.91 263.86 691.91 263.86C691.91 264.64 691.27 265.28 690.49 265.28L607.56 265.28 607.56 265.28C606.78 265.28 606.14 264.64 606.14 263.86z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.14 258.22C606.14 257.44 606.78 256.8 607.56 256.8L690.49 256.8 690.49 256.8C691.27 256.8 691.91 257.44 691.91 258.22 691.91 258.22 691.91 258.22 691.91 258.22L691.91 263.86 691.91 263.86C691.91 264.64 691.27 265.28 690.49 265.28L607.56 265.28 607.56 265.28C606.78 265.28 606.14 264.64 606.14 263.86z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 613.7577, 260.81818)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="3.017788" y="3.3438306">
                        <tspan x="3.017788" y="3.3438306"></tspan>
                        <tspan x="8.392788" y="3.3438306" textLength="59.651367" fill="#0070C0"><?=$a_answer3_3?> (<?=$a_p3_3?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M606.71 268.62C606.71 267.77 607.4 267.08 608.25 267.08L690.22 267.08 690.22 267.08C691.08 267.08 691.77 267.77 691.77 268.62 691.77 268.62 691.77 268.62 691.77 268.62L691.77 274.79 691.77 274.79C691.77 275.65 691.08 276.34 690.22 276.34L608.25 276.34 608.25 276.34C607.4 276.34 606.71 275.65 606.71 274.79z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M606.71 268.62C606.71 267.77 607.4 267.08 608.25 267.08L690.22 267.08 690.22 267.08C691.08 267.08 691.77 267.77 691.77 268.62 691.77 268.62 691.77 268.62 691.77 268.62L691.77 274.79 691.77 274.79C691.77 275.65 691.08 276.34 690.22 276.34L608.25 276.34 608.25 276.34C607.4 276.34 606.71 275.65 606.71 274.79z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 614.3613, 271.13092)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="2.626606" y="3.6989865">
                        <tspan x="2.626606" y="3.6989865"></tspan>
                        <tspan x="8.001606" y="3.6989865" textLength="59.651367" fill="#0070C0"><?=$a_answer3_4?> (<?=$a_p3_4?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.38 329.98C607.38 328.98 608.2 328.16 609.2 328.16L688.01 328.16 688.01 328.16C689.02 328.16 689.83 328.98 689.83 329.98 689.83 329.98 689.83 329.98 689.83 329.98L689.83 337.25 689.83 337.25C689.83 338.25 689.02 339.06 688.01 339.06L609.2 339.06C608.2 339.06 607.38 338.25 607.38 337.25z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.38 329.98C607.38 328.98 608.2 328.16 609.2 328.16L688.01 328.16 688.01 328.16C689.02 328.16 689.83 328.98 689.83 329.98 689.83 329.98 689.83 329.98 689.83 329.98L689.83 337.25 689.83 337.25C689.83 338.25 689.02 339.06 688.01 339.06L609.2 339.06C608.2 339.06 607.38 338.25 607.38 337.25z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.1156, 332.2945)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="1.2405891" y="4.440811">
                        <tspan x="1.2405891" y="4.440811"></tspan>
                        <tspan x="6.615589" y="4.440811" textLength="59.651367" fill="#0070C0"><?=$a_answer4_1?> (<?=$a_p4_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.61 345.55C607.61 343.5 609.28 341.83 611.34 341.83L686.68 341.83 686.68 341.83C688.74 341.83 690.41 343.5 690.41 345.55 690.41 345.55 690.41 345.55 690.41 345.55L690.41 360.47 690.41 360.47C690.41 362.53 688.74 364.2 686.68 364.2L611.34 364.2 611.34 364.2C609.28 364.2 607.61 362.53 607.61 360.47z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.61 345.55C607.61 343.5 609.28 341.83 611.34 341.83L686.68 341.83 686.68 341.83C688.74 341.83 690.41 343.5 690.41 345.55 690.41 345.55 690.41 345.55 690.41 345.55L690.41 360.47 690.41 360.47C690.41 362.53 688.74 364.2 686.68 364.2L611.34 364.2 611.34 364.2C609.28 364.2 607.61 362.53 607.61 360.47z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.5342, 343.40347)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0.69812775" y="11.228466">
                        <tspan x="0.69812775" y="11.228466"></tspan>
                        <tspan x="6.0731277" y="11.228466" textLength="59.651367" fill="#0070C0"><?=$a_answer4_2?> (<?=$a_p4_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.58 402.61C607.58 401.62 608.38 400.82 609.37 400.82L688.62 400.82 688.62 400.82C689.61 400.82 690.41 401.62 690.41 402.61 690.41 402.61 690.41 402.61 690.41 402.61L690.41 409.78 690.41 409.77C690.41 410.76 689.61 411.57 688.62 411.57L609.37 411.57 609.37 411.57C608.38 411.57 607.58 410.76 607.58 409.77z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.58 402.61C607.58 401.62 608.38 400.82 609.37 400.82L688.62 400.82 688.62 400.82C689.61 400.82 690.41 401.62 690.41 402.61 690.41 402.61 690.41 402.61 690.41 402.61L690.41 409.78 690.41 409.77C690.41 410.76 689.61 411.57 688.62 411.57L609.37 411.57 609.37 411.57C608.38 411.57 607.58 410.76 607.58 409.77z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.30255, 404.94464)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="1.4402313" y="4.3702917">
                        <tspan x="1.4402313" y="4.3702917"></tspan>
                        <tspan x="6.8152313" y="4.3702917" textLength="59.651367" fill="#0070C0"><?=$a_answer4_4?> (<?=$a_p4_4?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.38 462.64C607.38 461.65 608.18 460.85 609.17 460.85L686.51 460.85 686.51 460.85C687.49 460.85 688.29 461.65 688.29 462.64 688.29 462.64 688.29 462.64 688.29 462.64L688.29 469.77 688.29 469.77C688.29 470.76 687.49 471.55 686.51 471.55L609.17 471.55C608.18 471.55 607.38 470.76 607.38 469.77z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.38 462.64C607.38 461.65 608.18 460.85 609.17 460.85L686.51 460.85 686.51 460.85C687.49 460.85 688.29 461.65 688.29 462.64 688.29 462.64 688.29 462.64 688.29 462.64L688.29 469.77 688.29 469.77C688.29 470.76 687.49 471.55 686.51 471.55L609.17 471.55C608.18 471.55 607.38 470.76 607.38 469.77z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.1057, 464.9766)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="5.8573494" y="4.3496156">
                        <tspan x="5.8573494" y="4.3496156"></tspan>
                        <tspan x="6.232349" y="4.3496156" textLength="48.375" fill="#0070C0"><?=$a_answer5_1?> (<?=$a_p5_1?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.55 475.8C607.55 474.81 608.35 474.01 609.34 474.01L687.05 474.01 687.05 474.01C688.04 474.01 688.84 474.81 688.84 475.8 688.84 475.8 688.84 475.8 688.84 475.8L688.84 482.93 688.84 482.93C688.84 483.92 688.04 484.72 687.05 484.72L609.34 484.72 609.34 484.72C608.35 484.72 607.55 483.92 607.55 482.93z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.55 475.8C607.55 474.81 608.35 474.01 609.34 474.01L687.05 474.01 687.05 474.01C688.04 474.01 688.84 474.81 688.84 475.8 688.84 475.8 688.84 475.8 688.84 475.8L688.84 482.93 688.84 482.93C688.84 483.92 688.04 484.72 687.05 484.72L609.34 484.72 609.34 484.72C608.35 484.72 607.55 483.92 607.55 482.93z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.2752, 478.13425)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0.6704407" y="4.35196">
                        <tspan x="0.6704407" y="4.35196"></tspan>
                        <tspan x="6.0454407" y="4.35196" textLength="59.651367" fill="#0070C0"><?=$a_answer5_2?> (<?=$a_p5_2?>%)</tspan>
                    </text></g>
                <path fill="#DEEBF7"
                    d="M607.96 512.95C607.96 511.98 608.75 511.19 609.72 511.19L687.49 511.2 687.49 511.19C688.46 511.19 689.25 511.98 689.25 512.95 689.25 512.95 689.25 512.95 689.25 512.95L689.25 519.98 689.25 519.98C689.25 520.95 688.46 521.74 687.49 521.74L609.72 521.74C608.75 521.74 607.96 520.95 607.96 519.98z">
                </path>
                <path stroke-width="1" stroke="#41719C" fill="none"
                    d="M607.96 512.95C607.96 511.98 608.75 511.19 609.72 511.19L687.49 511.2 687.49 511.19C688.46 511.19 689.25 511.98 689.25 512.95 689.25 512.95 689.25 512.95 689.25 512.95L689.25 519.98 689.25 519.98C689.25 520.95 688.46 521.74 687.49 521.74L609.72 521.74C608.75 521.74 607.96 520.95 607.96 519.98z">
                </path>
                <g transform="matrix(1, 0, 0, 1, 615.6745, 515.30994)"><text font-family="Lucida Console"
                        font-style="normal" font-weight="normal" font-stretch="normal" font-size="6.75pt" fill="#2E75B6"
                        x="0.6782608" y="4.2804103">
                        <tspan x="0.6782608" y="4.2804103"></tspan>
                        <tspan x="6.053261" y="4.2804103" textLength="59.651367" fill="#0070C0"><?=$a_answer5_4?> (<?=$a_p5_4?>%)</tspan>
                    </text></g>
            </g>
        </svg></div>


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