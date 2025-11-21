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

        echo '<h2><a href="../openAfter.php">меню</a></h2>';

        echo '<div class="results">';

        echo '<div class="pie">';

        ?>

        <div style="padding-left: 10%; /* Поле слева */"  class="slide" name="slide" id="slideslideIface1"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="10in" height="7.5in" class="slides-canvas"
                        pointer-events="none" viewBox="0 0 720 540">
                        <g text-rendering="geometricPrecision" pointer-events="painted" transform="scale(1, 1)">
                                <rect x="0" y="0" width="720" height="540" fill="#FFFFFF"></rect>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M-0 29.21C-0 22.97 5.05 17.92 11.29 17.92L708.71 17.92 708.71 17.92C714.95 17.92 720 22.97 720 29.21 720 29.21 720 29.21 720 29.21L720 74.36 720 74.36C720 80.6 714.95 85.65 708.71 85.65L11.29 85.65 11.29 85.65C5.05 85.65 0 80.6 -0 74.36z">
                                </path>
                                <path fill="#DEEBF7"
                                        d="M11.87 36.8C11.87 35.8 12.68 35 13.67 35L473.35 35 473.35 35C474.35 35 475.15 35.8 475.15 36.8 475.15 36.8 475.15 36.8 475.15 36.8L475.15 43.99 475.15 43.99C475.15 44.99 474.35 45.79 473.35 45.79L13.67 45.79C12.68 45.79 11.87 44.99 11.87 43.99z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.87 36.8C11.87 35.8 12.68 35 13.67 35L473.35 35 473.35 35C474.35 35 475.15 35.8 475.15 36.8 475.15 36.8 475.15 36.8 475.15 36.8L475.15 43.99 475.15 43.99C475.15 44.99 474.35 45.79 473.35 45.79L13.67 45.79C12.68 45.79 11.87 44.99 11.87 43.99z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.600494, 39.124336)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="4.39281">
                                                <tspan x="0" y="4.39281">Заместитель Председателя Правительства
                                                        Российской Федерации Т.А.Голикова</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.29 49.49C11.29 48.54 12.06 47.77 13.01 47.77L473.48 47.77 473.48 47.77C474.43 47.77 475.2 48.54 475.2 49.49 475.2 49.49 475.2 49.49 475.2 49.49L475.2 56.37 475.2 56.37C475.2 57.32 474.43 58.09 473.48 58.09L13.01 58.09 13.01 58.09C12.06 58.09 11.29 57.32 11.29 56.37z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.29 49.49C11.29 48.54 12.06 47.77 13.01 47.77L473.48 47.77 473.48 47.77C474.43 47.77 475.2 48.54 475.2 49.49 475.2 49.49 475.2 49.49 475.2 49.49L475.2 56.37 475.2 56.37C475.2 57.32 474.43 58.09 473.48 58.09L13.01 58.09 13.01 58.09C12.06 58.09 11.29 57.32 11.29 56.37z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.98999, 51.87497)"><text font-family="Lucida Console"
                                                font-style="normal" font-weight="normal" font-stretch="normal"
                                                font-size="6.75pt" fill="#0070C0" x="0" y="4.1784143">
                                                <tspan x="0" y="4.1784143">Президент Российской Федерации В.В.Путин
                                                </tspan>
                                                <tspan xml:space="preserve" x="216.91406" y="4.1784143"> </tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.26 61.73C11.26 60.84 11.98 60.12 12.87 60.12L474.21 60.12 474.21 60.12C475.1 60.12 475.82 60.84 475.82 61.73 475.82 61.73 475.82 61.73 475.82 61.73L475.82 68.14 475.82 68.14C475.82 69.03 475.1 69.75 474.21 69.75L12.87 69.75C11.98 69.75 11.26 69.03 11.26 68.14z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.26 61.73C11.26 60.84 11.98 60.12 12.87 60.12L474.21 60.12 474.21 60.12C475.1 60.12 475.82 60.84 475.82 61.73 475.82 61.73 475.82 61.73 475.82 61.73L475.82 68.14 475.82 68.14C475.82 69.03 475.1 69.75 474.21 69.75L12.87 69.75C11.98 69.75 11.26 69.03 11.26 68.14z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.934097, 64.19039)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="3.8664575">
                                                <tspan x="0" y="3.8664575">Председатель Правительства Российской
                                                        Федерации М.В.Мишустин</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.29 73.81C11.29 72.83 12.08 72.04 13.06 72.04L473.43 72.04 473.43 72.04C474.41 72.04 475.2 72.83 475.2 73.81 475.2 73.81 475.2 73.81 475.2 73.81L475.2 80.9 475.2 80.9C475.2 81.88 474.41 82.68 473.43 82.68L13.06 82.68 13.06 82.68C12.08 82.68 11.29 81.88 11.29 80.9z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.29 73.81C11.29 72.83 12.08 72.04 13.06 72.04L473.43 72.04 473.43 72.04C474.41 72.04 475.2 72.83 475.2 73.81 475.2 73.81 475.2 73.81 475.2 73.81L475.2 80.9 475.2 80.9C475.2 81.88 474.41 82.68 473.43 82.68L13.06 82.68 13.06 82.68C12.08 82.68 11.29 81.88 11.29 80.9z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.00563, 76.15596)"><text font-family="Lucida Console"
                                                font-style="normal" font-weight="normal" font-stretch="normal"
                                                font-size="6.75pt" fill="#2E75B6" x="0" y="4.323024">
                                                <tspan x="0" y="4.323024">Министр здравоохранения Российской Федерации
                                                        М.А.Мурашко</tspan>
                                        </text></g>
                                <path fill="#9DC3E6"
                                        d="M10.7 22.74C10.7 21.51 11.69 20.52 12.92 20.52L707.41 20.52 707.41 20.52C708.64 20.52 709.64 21.51 709.64 22.74 709.64 22.74 709.64 22.74 709.64 22.74L709.64 31.65 709.64 31.65C709.64 32.88 708.64 33.88 707.42 33.88L12.92 33.88 12.92 33.88C11.69 33.88 10.7 32.88 10.7 31.65z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 22.74C10.7 21.51 11.69 20.52 12.92 20.52L707.41 20.52 707.41 20.52C708.64 20.52 709.64 21.51 709.64 22.74 709.64 22.74 709.64 22.74 709.64 22.74L709.64 31.65 709.64 31.65C709.64 32.88 708.64 33.88 707.42 33.88L12.92 33.88 12.92 33.88C11.69 33.88 10.7 32.88 10.7 31.65z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.550262, 24.76856)"><text stroke="#000000"
                                                stroke-width="0.24pt" font-family="Lucida Console" font-style="italic"
                                                font-weight="normal" font-stretch="normal" font-size="7.875pt"
                                                fill="#000000" x="0" y="6.0694466">
                                                <tspan x="0" y="6.0694466">1. Кто в Российской Федерации является
                                                        куратором национального проекта «Продолжительная и активная
                                                        жизнь»?</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M492.85 38.56C492.85 37.76 493.5 37.12 494.3 37.12L606.26 37.12 606.26 37.12C607.06 37.12 607.71 37.76 607.71 38.56 607.71 38.56 607.71 38.56 607.71 38.56L607.71 44.33 607.71 44.33C607.71 45.13 607.06 45.77 606.26 45.77L494.3 45.77 494.3 45.77C493.5 45.77 492.85 45.13 492.85 44.33z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M492.85 38.56C492.85 37.76 493.5 37.12 494.3 37.12L606.26 37.12 606.26 37.12C607.06 37.12 607.71 37.76 607.71 38.56 607.71 38.56 607.71 38.56 607.71 38.56L607.71 44.33 607.71 44.33C607.71 45.13 607.06 45.77 606.26 45.77L494.3 45.77 494.3 45.77C493.5 45.77 492.85 45.13 492.85 44.33z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 500.4763, 41.13955)"><text font-family="Lucida Console"
                                                font-style="normal" font-weight="normal" font-stretch="normal"
                                                font-size="6.75pt" fill="#0070C0" x="22.92846" y="3.4263887">
                                                <tspan x="22.92846" y="3.4263887"><?=$answer1_1?> (<?=$p1_1?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M492.54 50.88C492.54 50.08 493.18 49.43 493.98 49.43L606.48 49.43 606.48 49.43C607.28 49.43 607.92 50.08 607.92 50.88 607.92 50.88 607.92 50.88 607.92 50.88L607.92 56.65 607.92 56.65C607.92 57.44 607.28 58.09 606.48 58.09L493.98 58.09 493.98 58.09C493.18 58.09 492.54 57.44 492.54 56.65z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M492.54 50.88C492.54 50.08 493.18 49.43 493.98 49.43L606.48 49.43 606.48 49.43C607.28 49.43 607.92 50.08 607.92 50.88 607.92 50.88 607.92 50.88 607.92 50.88L607.92 56.65 607.92 56.65C607.92 57.44 607.28 58.09 606.48 58.09L493.98 58.09 493.98 58.09C493.18 58.09 492.54 57.44 492.54 56.65z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 500.1606, 53.454765)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.195656"
                                                y="3.4283466">
                                                <tspan x="23.195656" y="3.4283466"><?=$answer1_2?> (<?=$p1_2?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.97 63.7C491.97 62.98 492.55 62.4 493.27 62.4L607.02 62.4 607.02 62.4C607.73 62.4 608.32 62.98 608.32 63.7 608.32 63.7 608.32 63.7 608.32 63.7L608.32 68.9 608.32 68.9C608.32 69.62 607.73 70.2 607.02 70.2L493.27 70.2 493.27 70.2C492.55 70.2 491.97 69.62 491.97 68.9z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.97 63.7C491.97 62.98 492.55 62.4 493.27 62.4L607.02 62.4 607.02 62.4C607.73 62.4 608.32 62.98 608.32 63.7 608.32 63.7 608.32 63.7 608.32 63.7L608.32 68.9 608.32 68.9C608.32 69.62 607.73 70.2 607.02 70.2L493.27 70.2 493.27 70.2C492.55 70.2 491.97 69.62 491.97 68.9z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.55353, 66.37957)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.715992"
                                                y="3.0432382">
                                                <tspan x="23.715992" y="3.0432382"><?=$answer1_3?> (<?=$p1_3?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M492.54 75.57C492.54 74.78 493.17 74.15 493.96 74.15L606.5 74.15 606.5 74.15C607.29 74.15 607.92 74.78 607.92 75.57 607.92 75.57 607.92 75.57 607.92 75.57L607.92 81.26 607.92 81.26C607.92 82.04 607.29 82.68 606.5 82.68L493.96 82.68 493.96 82.68C493.17 82.68 492.54 82.04 492.54 81.26z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M492.54 75.57C492.54 74.78 493.17 74.15 493.96 74.15L606.5 74.15 606.5 74.15C607.29 74.15 607.92 74.78 607.92 75.57 607.92 75.57 607.92 75.57 607.92 75.57L607.92 81.26 607.92 81.26C607.92 82.04 607.29 82.68 606.5 82.68L493.96 82.68 493.96 82.68C493.17 82.68 492.54 82.04 492.54 81.26z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 500.15424, 78.16427)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.202015"
                                                y="3.3704405">
                                                <tspan x="23.202015" y="3.3704405"><?=$answer1_4?> (<?=$p1_4?>%)</tspan>
                                        </text></g>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M-0 128.1C-0 122.3 4.7 117.6 10.49 117.6L709.51 117.6 709.51 117.6C715.3 117.6 720 122.3 720 128.1 720 128.1 720 128.1 720 128.1L720 170.07 720 170.07C720 175.87 715.3 180.57 709.51 180.57L10.49 180.57 10.49 180.57C4.7 180.57 0 175.87 -0 170.07z">
                                </path>
                                <path fill="#DEEBF7"
                                        d="M11.29 134.16C11.29 133.12 12.13 132.28 13.17 132.28L473.32 132.28 473.32 132.28C474.36 132.28 475.2 133.12 475.2 134.16 475.2 134.16 475.2 134.16 475.2 134.16L475.2 141.67 475.2 141.67C475.2 142.71 474.36 143.55 473.32 143.55L13.17 143.55 13.17 143.55C12.13 143.55 11.29 142.71 11.29 141.67z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.29 134.16C11.29 133.12 12.13 132.28 13.17 132.28L473.32 132.28 473.32 132.28C474.36 132.28 475.2 133.12 475.2 134.16 475.2 134.16 475.2 134.16 475.2 134.16L475.2 141.67 475.2 141.67C475.2 142.71 474.36 143.55 473.32 143.55L13.17 143.55 13.17 143.55C12.13 143.55 11.29 142.71 11.29 141.67z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.036499, 136.42703)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="4.608254">
                                                <tspan x="0" y="4.608254">Наложение административного штрафа на
                                                        должностных лиц или дисквалификацию</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.7 146C10.7 145.01 11.5 144.2 12.49 144.2L473.46 144.2 473.46 144.2C474.45 144.2 475.25 145.01 475.25 146 475.25 146 475.25 146 475.25 146L475.25 153.19 475.25 153.19C475.25 154.18 474.45 154.98 473.46 154.98L12.49 154.98C11.5 154.98 10.7 154.18 10.7 153.19z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 146C10.7 145.01 11.5 144.2 12.49 144.2L473.46 144.2 473.46 144.2C474.45 144.2 475.25 145.01 475.25 146 475.25 146 475.25 146 475.25 146L475.25 153.19 475.25 153.19C475.25 154.18 474.45 154.98 473.46 154.98L12.49 154.98C11.5 154.98 10.7 154.18 10.7 153.19z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.42395, 148.33105)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="4.3843474">
                                                <tspan x="0" y="4.3843474">Наложение административного штрафа</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.68 157.44C10.68 156.51 11.43 155.76 12.35 155.76L474.19 155.76 474.19 155.76C475.12 155.76 475.87 156.51 475.87 157.44 475.87 157.44 475.87 157.44 475.87 157.44L475.87 164.14 475.87 164.14C475.87 165.07 475.12 165.82 474.19 165.82L12.35 165.82 12.35 165.82C11.43 165.82 10.68 165.07 10.68 164.14z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.68 157.44C10.68 156.51 11.43 155.76 12.35 155.76L474.19 155.76 474.19 155.76C475.12 155.76 475.87 156.51 475.87 157.44 475.87 157.44 475.87 157.44 475.87 157.44L475.87 164.14 475.87 164.14C475.87 165.07 475.12 165.82 474.19 165.82L12.35 165.82 12.35 165.82C11.43 165.82 10.68 165.07 10.68 164.14z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.36589, 159.85349)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="4.058612">
                                                <tspan x="0" y="4.058612">Уголовная ответственность</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.7 168.58C10.7 167.56 11.53 166.73 12.55 166.73L473.4 166.73 473.4 166.73C474.42 166.73 475.25 167.56 475.25 168.58 475.25 168.58 475.25 168.58 475.25 168.58L475.25 175.99 475.25 175.99C475.25 177.01 474.42 177.84 473.4 177.84L12.55 177.84 12.55 177.84C11.53 177.84 10.7 177.01 10.7 175.99z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 168.58C10.7 167.56 11.53 166.73 12.55 166.73L473.4 166.73 473.4 166.73C474.42 166.73 475.25 167.56 475.25 168.58 475.25 168.58 475.25 168.58 475.25 168.58L475.25 175.99 475.25 175.99C475.25 177.01 474.42 177.84 473.4 177.84L12.55 177.84 12.55 177.84C11.53 177.84 10.7 177.01 10.7 175.99z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.440292, 170.87054)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="4.535338">
                                                <tspan x="0" y="4.535338">Ответственность законодательно не определена
                                                </tspan>
                                        </text></g>
                                <path fill="#9DC3E6"
                                        d="M10.7 121.86C10.7 120.84 11.52 120.02 12.54 120.02L707.8 120.02 707.8 120.02C708.82 120.02 709.64 120.84 709.64 121.86 709.64 121.86 709.64 121.86 709.64 121.86L709.64 129.24 709.64 129.24C709.64 130.26 708.82 131.08 707.8 131.08L12.54 131.08 12.54 131.08C11.52 131.08 10.7 130.26 10.7 129.24z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 121.86C10.7 120.84 11.52 120.02 12.54 120.02L707.8 120.02 707.8 120.02C708.82 120.02 709.64 120.84 709.64 121.86 709.64 121.86 709.64 121.86 709.64 121.86L709.64 129.24 709.64 129.24C709.64 130.26 708.82 131.08 707.8 131.08L12.54 131.08 12.54 131.08C11.52 131.08 10.7 130.26 10.7 129.24z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.438416, 124.15561)"><text stroke="#000000"
                                                stroke-width="0.24pt" font-family="Lucida Console" font-style="italic"
                                                font-weight="normal" font-stretch="normal" font-size="7.875pt"
                                                fill="#000000" x="0" y="5.035649">
                                                <tspan x="0" y="5.035649">2. Какая ответственность предусматривается за
                                                        невыполнение показателей и результатов национальных проектов?
                                                </tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M492.29 135.77C492.29 134.81 493.07 134.03 494.03 134.03L605.96 134.03 605.96 134.03C606.92 134.03 607.7 134.81 607.7 135.77 607.7 135.77 607.7 135.77 607.7 135.77L607.7 142.76 607.7 142.76C607.7 143.72 606.92 144.5 605.96 144.5L494.03 144.5C493.07 144.5 492.29 143.72 492.29 142.76z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M492.29 135.77C492.29 134.81 493.07 134.03 494.03 134.03L605.96 134.03 605.96 134.03C606.92 134.03 607.7 134.81 607.7 135.77 607.7 135.77 607.7 135.77 607.7 135.77L607.7 142.76 607.7 142.76C607.7 143.72 606.92 144.5 605.96 144.5L494.03 144.5C493.07 144.5 492.29 143.72 492.29 142.76z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.99963, 138.14064)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.121239"
                                                y="4.2464204">
                                                <tspan x="23.121239" y="4.2464204"><?=$answer2_1?> (<?=$p2_1?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.97 147.22C491.97 146.26 492.75 145.48 493.72 145.48L606.18 145.48 606.18 145.48C607.14 145.48 607.92 146.26 607.92 147.22 607.92 147.22 607.92 147.22 607.92 147.22L607.92 154.21 607.92 154.21C607.92 155.17 607.14 155.95 606.18 155.95L493.72 155.95 493.72 155.95C492.75 155.95 491.97 155.17 491.97 154.21z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.97 147.22C491.97 146.26 492.75 145.48 493.72 145.48L606.18 145.48 606.18 145.48C607.14 145.48 607.92 146.26 607.92 147.22 607.92 147.22 607.92 147.22 607.92 147.22L607.92 154.21 607.92 154.21C607.92 155.17 607.14 155.95 606.18 155.95L493.72 155.95 493.72 155.95C492.75 155.95 491.97 155.17 491.97 154.21z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.68402, 149.5896)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.389671"
                                                y="4.248715">
                                                <tspan x="23.389671" y="4.248715"><?=$answer2_2?> (<?=$p2_2?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.41 159.11C491.41 158.24 492.11 157.53 492.98 157.53L606.75 157.53 606.75 157.53C607.62 157.53 608.32 158.24 608.32 159.11 608.32 159.11 608.32 159.11 608.32 159.11L608.32 165.4 608.32 165.4C608.32 166.27 607.62 166.98 606.75 166.98L492.98 166.98C492.11 166.98 491.41 166.27 491.41 165.4z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.41 159.11C491.41 158.24 492.11 157.53 492.98 157.53L606.75 157.53 606.75 157.53C607.62 157.53 608.32 158.24 608.32 159.11 608.32 159.11 608.32 159.11 608.32 159.11L608.32 165.4 608.32 165.4C608.32 166.27 607.62 166.98 606.75 166.98L492.98 166.98C492.11 166.98 491.41 166.27 491.41 165.4z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.06827, 161.59395)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.921108"
                                                y="3.782795">
                                                <tspan x="23.921108" y="3.782795"><?=$answer2_3?> (<?=$p2_3?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.97 170.18C491.97 169.23 492.74 168.46 493.69 168.46L606.2 168.46 606.2 168.46C607.15 168.46 607.92 169.23 607.92 170.18 607.92 170.18 607.92 170.18 607.92 170.18L607.92 177.06 607.92 177.06C607.92 178.01 607.15 178.78 606.2 178.78L493.69 178.78 493.69 178.78C492.74 178.78 491.97 178.01 491.97 177.06z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.97 170.18C491.97 169.23 492.74 168.46 493.69 168.46L606.2 168.46 606.2 168.46C607.15 168.46 607.92 169.23 607.92 170.18 607.92 170.18 607.92 170.18 607.92 170.18L607.92 177.06 607.92 177.06C607.92 178.01 607.15 178.78 606.2 178.78L493.69 178.78 493.69 178.78C492.74 178.78 491.97 178.01 491.97 177.06z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.67642, 172.55968)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.39738"
                                                y="4.1787267">
                                                <tspan x="23.39738" y="4.1787267"><?=$answer2_4?> (<?=$p2_4?>%)</tspan>
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
                                <g transform="matrix(1, 0, 0, 1, 19.580383, 235.8269)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="4.0000744">
                                                <tspan x="0" y="4.0000744">ГАС «Управление»</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.31 245.14C11.31 244.26 12.02 243.55 12.89 243.55L478.27 243.55 478.27 243.55C479.14 243.55 479.85 244.26 479.85 245.14 479.85 245.14 479.85 245.14 479.85 245.14L479.85 251.46 479.85 251.46C479.85 252.33 479.14 253.04 478.27 253.04L12.89 253.04 12.89 253.04C12.02 253.04 11.31 252.33 11.31 251.46z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.31 245.14C11.31 244.26 12.02 243.55 12.89 243.55L478.27 243.55 478.27 243.55C479.14 243.55 479.85 244.26 479.85 245.14 479.85 245.14 479.85 245.14 479.85 245.14L479.85 251.46 479.85 251.46C479.85 252.33 479.14 253.04 478.27 253.04L12.89 253.04 12.89 253.04C12.02 253.04 11.31 252.33 11.31 251.46z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.971725, 247.61748)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="3.8029633">
                                                <tspan x="0" y="3.8029633">ГИИС «Электронный бюджет»</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.29 256.43C11.29 255.62 11.95 254.96 12.76 254.96L479 254.96 479 254.96C479.81 254.96 480.47 255.62 480.47 256.43 480.47 256.43 480.47 256.43 480.47 256.43L480.47 262.33 480.47 262.33C480.47 263.15 479.81 263.81 479 263.81L12.76 263.81 12.76 263.81C11.95 263.81 11.29 263.15 11.29 262.33z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.29 256.43C11.29 255.62 11.95 254.96 12.76 254.96L479 254.96 479 254.96C479.81 254.96 480.47 255.62 480.47 256.43 480.47 256.43 480.47 256.43 480.47 256.43L480.47 262.33 480.47 262.33C480.47 263.15 479.81 263.81 479 263.81L12.76 263.81 12.76 263.81C11.95 263.81 11.29 263.15 11.29 262.33z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.91858, 258.9888)"><text font-family="Lucida Console"
                                                font-style="normal" font-weight="normal" font-stretch="normal"
                                                font-size="6.75pt" fill="#2E75B6" x="0" y="3.5161858">
                                                <tspan x="0" y="3.5161858">Единая информационная система в сфере закупок
                                                        (ЕИС)</tspan>
                                                <tspan xml:space="preserve" x="276.56543" y="3.5161858"> </tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.31 267.71C11.31 266.81 12.04 266.08 12.94 266.08L478.22 266.08 478.22 266.08C479.12 266.08 479.85 266.81 479.85 267.71 479.85 267.71 479.85 267.71 479.85 267.71L479.85 274.23 479.85 274.23C479.85 275.13 479.12 275.86 478.22 275.86L12.94 275.86 12.94 275.86C12.04 275.86 11.31 275.13 11.31 274.23z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.31 267.71C11.31 266.81 12.04 266.08 12.94 266.08L478.22 266.08 478.22 266.08C479.12 266.08 479.85 266.81 479.85 267.71 479.85 267.71 479.85 267.71 479.85 267.71L479.85 274.23 479.85 274.23C479.85 275.13 479.12 275.86 478.22 275.86L12.94 275.86 12.94 275.86C12.04 275.86 11.31 275.13 11.31 274.23z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.986115, 270.1592)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="3.9359407">
                                                <tspan x="0" y="3.9359407">КМУИП</tspan>
                                        </text></g>
                                <path fill="#9DC3E6"
                                        d="M10.7 209.24C10.7 207.05 12.48 205.27 14.67 205.27L705.67 205.27 705.67 205.27C707.86 205.27 709.64 207.05 709.64 209.24 709.64 209.24 709.64 209.24 709.64 209.24L709.64 225.13 709.64 225.13C709.64 227.32 707.86 229.1 705.67 229.1L14.67 229.1 14.67 229.1C12.48 229.1 10.7 227.32 10.7 225.13z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 209.24C10.7 207.05 12.48 205.27 14.67 205.27L705.67 205.27 705.67 205.27C707.86 205.27 709.64 207.05 709.64 209.24 709.64 209.24 709.64 209.24 709.64 209.24L709.64 225.13 709.64 225.13C709.64 227.32 707.86 229.1 705.67 229.1L14.67 229.1 14.67 229.1C12.48 229.1 10.7 227.32 10.7 225.13z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.061554, 210.0334)"><text stroke="#000000"
                                                stroke-width="0.24pt" font-family="Lucida Console" font-style="italic"
                                                font-weight="normal" font-stretch="normal" font-size="7.875pt"
                                                fill="#000000" x="0" y="17.094944">
                                                <tspan x="0" y="4.4949408">3. В какой государственной информационной
                                                        системе проводится анализ реализации национальных, федеральных и
                                                </tspan>
                                                <tspan xml:space="preserve" x="675.75" y="4.4949408"> </tspan>
                                                <tspan x="0" y="17.094944">региональных проектов?</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.16 233.21C491.16 232.4 491.81 231.74 492.62 231.74L605.89 231.74 605.89 231.74C606.7 231.74 607.36 232.4 607.36 233.21 607.36 233.21 607.36 233.21 607.36 233.21L607.36 239.07 607.36 239.07C607.36 239.88 606.7 240.53 605.89 240.53L492.62 240.53 492.62 240.53C491.81 240.53 491.16 239.88 491.16 239.07z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.16 233.21C491.16 232.4 491.81 231.74 492.62 231.74L605.89 231.74 605.89 231.74C606.7 231.74 607.36 232.4 607.36 233.21 607.36 233.21 607.36 233.21 607.36 233.21L607.36 239.07 607.36 239.07C607.36 239.88 606.7 240.53 605.89 240.53L492.62 240.53 492.62 240.53C491.81 240.53 491.16 239.88 491.16 239.07z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 498.7867, 235.77127)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.596909"
                                                y="3.4881754">
                                                <tspan x="23.596909" y="3.4881754"><?=$answer3_1?> (<?=$p3_1?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M490.84 244.63C490.84 243.82 491.5 243.16 492.31 243.16L606.12 243.16 606.12 243.16C606.93 243.16 607.58 243.82 607.58 244.63 607.58 244.63 607.58 244.63 607.58 244.63L607.58 250.49 607.58 250.49C607.58 251.3 606.93 251.96 606.12 251.96L492.31 251.96 492.31 251.96C491.5 251.96 490.84 251.3 490.84 250.49z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M490.84 244.63C490.84 243.82 491.5 243.16 492.31 243.16L606.12 243.16 606.12 243.16C606.93 243.16 607.58 243.82 607.58 244.63 607.58 244.63 607.58 244.63 607.58 244.63L607.58 250.49 607.58 250.49C607.58 251.3 606.93 251.96 606.12 251.96L492.31 251.96 492.31 251.96C491.5 251.96 490.84 251.3 490.84 250.49z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 498.4709, 247.19258)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="23.867199"
                                                y="3.4901237">
                                                <tspan x="23.867199" y="3.4901237"><?=$answer3_2?> (<?=$p3_2?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M490.28 256.49C490.28 255.76 490.87 255.17 491.6 255.17L606.67 255.17 606.67 255.17C607.4 255.17 607.99 255.76 607.99 256.49 607.99 256.49 607.99 256.49 607.99 256.49L607.99 261.77 607.99 261.77C607.99 262.5 607.4 263.09 606.67 263.09L491.6 263.09 491.6 263.09C490.87 263.09 490.28 262.5 490.28 261.77z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M490.28 256.49C490.28 255.76 490.87 255.17 491.6 255.17L606.67 255.17 606.67 255.17C607.4 255.17 607.99 255.76 607.99 256.49 607.99 256.49 607.99 256.49 607.99 256.49L607.99 261.77 607.99 261.77C607.99 262.5 607.4 263.09 606.67 263.09L491.6 263.09 491.6 263.09C490.87 263.09 490.28 262.5 490.28 261.77z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 497.86334, 259.15372)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="21.706326"
                                                y="3.0989084">
                                                <tspan x="21.706326" y="3.0989084"><?=$answer3_3?> (<?=$p3_3?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M490.84 267.53C490.84 266.73 491.49 266.08 492.29 266.08L606.14 266.08 606.14 266.08C606.94 266.08 607.58 266.73 607.58 267.53 607.58 267.53 607.58 267.53 607.58 267.53L607.58 273.3 607.58 273.3C607.58 274.1 606.94 274.75 606.14 274.75L492.29 274.75 492.29 274.75C491.49 274.75 490.84 274.1 490.84 273.3z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M490.84 267.53C490.84 266.73 491.49 266.08 492.29 266.08L606.14 266.08 606.14 266.08C606.94 266.08 607.58 266.73 607.58 267.53 607.58 267.53 607.58 267.53 607.58 267.53L607.58 273.3 607.58 273.3C607.58 274.1 606.94 274.75 606.14 274.75L492.29 274.75 492.29 274.75C491.49 274.75 490.84 274.1 490.84 273.3z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 498.46454, 270.10455)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="21.186169"
                                                y="3.4313273">
                                                <tspan x="21.186169" y="3.4313273"><?=$answer3_4?> (<?=$p3_4?>%)</tspan>
                                        </text></g>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M-0 317.83C-0 308.24 7.78 300.46 17.37 300.46L702.63 300.46 702.63 300.46C712.22 300.46 720 308.24 720 317.83 720 317.83 720 317.83 720 317.83L720 387.3 720 387.3C720 396.89 712.22 404.66 702.63 404.66L17.37 404.66 17.37 404.66C7.78 404.66 0 396.89 -0 387.3z">
                                </path>
                                <path fill="#DEEBF7"
                                        d="M11.29 319.71C11.29 318.84 11.99 318.14 12.86 318.14L473.68 318.14 473.68 318.14C474.55 318.14 475.25 318.84 475.25 319.71 475.25 319.71 475.25 319.71 475.25 319.71L475.25 325.99 475.25 325.99C475.25 326.85 474.55 327.56 473.68 327.56L12.86 327.56C11.99 327.56 11.29 326.85 11.29 325.99z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.29 319.71C11.29 318.84 11.99 318.14 12.86 318.14L473.68 318.14 473.68 318.14C474.55 318.14 475.25 318.84 475.25 319.71 475.25 319.71 475.25 319.71 475.25 319.71L475.25 325.99 475.25 325.99C475.25 326.85 474.55 327.56 473.68 327.56L12.86 327.56C11.99 327.56 11.29 326.85 11.29 325.99z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.945984, 322.19965)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="3.7701573">
                                                <tspan x="0" y="3.7701573">Нет принципиальной разницы (показатели и
                                                        результаты проекта - это одно и тоже)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.7 334.64C10.7 332.57 12.38 330.89 14.45 330.89L471.55 330.89 471.55 330.89C473.62 330.89 475.3 332.57 475.3 334.64 475.3 334.64 475.3 334.64 475.3 334.64L475.3 349.67 475.3 349.67C475.3 351.74 473.62 353.42 471.55 353.42L14.45 353.42 14.45 353.42C12.38 353.42 10.7 351.74 10.7 349.67z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 334.64C10.7 332.57 12.38 330.89 14.45 330.89L471.55 330.89 471.55 330.89C473.62 330.89 475.3 332.57 475.3 334.64 475.3 334.64 475.3 334.64 475.3 334.64L475.3 349.67 475.3 349.67C475.3 351.74 473.62 353.42 471.55 353.42L14.45 353.42 14.45 353.42C12.38 353.42 10.7 351.74 10.7 349.67z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.998169, 335.5874)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="15.088879">
                                                <tspan x="0" y="4.2888775">Результат проекта – это денежное выражение
                                                        моей оплаты труда после реализации</tspan>
                                                <tspan xml:space="preserve" x="417.55957" y="4.2888775"> </tspan>
                                                <tspan x="0" y="15.088879">проекта, показатель – количество проектов,
                                                        участником которых я являюсь</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.67 362.04C10.67 359.35 12.85 357.17 15.54 357.17L471.05 357.17 471.05 357.17C473.74 357.17 475.92 359.35 475.92 362.04 475.92 362.04 475.92 362.04 475.92 362.04L475.92 381.49 475.92 381.49C475.92 384.17 473.74 386.35 471.05 386.35L15.54 386.35 15.54 386.35C12.85 386.35 10.67 384.17 10.67 381.49z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.67 362.04C10.67 359.35 12.85 357.17 15.54 357.17L471.05 357.17 471.05 357.17C473.74 357.17 475.92 359.35 475.92 362.04 475.92 362.04 475.92 362.04 475.92 362.04L475.92 381.49 475.92 381.49C475.92 384.17 473.74 386.35 471.05 386.35L15.54 386.35 15.54 386.35C12.85 386.35 10.67 384.17 10.67 381.49z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.29918, 362.19852)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="5.91pt" fill="#2E75B6" x="0"
                                                y="21.753017">
                                                <tspan x="0" y="2.8410182">Показатели отражают эффективность реализации
                                                        проекта (на сколько успешно идет выполнение</tspan>
                                                <tspan xml:space="preserve" x="446.3129" y="2.8410182"> </tspan>
                                                <tspan x="0" y="12.297017">проекта), результаты – отражают конкретные
                                                         задач итоги выполненных работ по проекту</tspan>
                                                <tspan xml:space="preserve" x="427.32083" y="12.297017"> </tspan>
                                                <tspan x="0" y="21.753017">(какой объем услуг (товаров и работ) был выполнен)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M10.7 392.52C10.7 391.67 11.39 390.97 12.24 390.97L473.75 390.97 473.75 390.97C474.61 390.97 475.3 391.67 475.3 392.52 475.3 392.52 475.3 392.52 475.3 392.52L475.3 398.71 475.3 398.71C475.3 399.56 474.61 400.26 473.75 400.26L12.24 400.26 12.24 400.26C11.39 400.26 10.7 399.56 10.7 398.71z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 392.52C10.7 391.67 11.39 390.97 12.24 390.97L473.75 390.97 473.75 390.97C474.61 390.97 475.3 391.67 475.3 392.52 475.3 392.52 475.3 392.52 475.3 392.52L475.3 398.71 475.3 398.71C475.3 399.56 474.61 400.26 473.75 400.26L12.24 400.26 12.24 400.26C11.39 400.26 10.7 399.56 10.7 398.71z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.350937, 395.0274)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="3.7092829">
                                                <tspan x="0" y="3.7092829">Первый раз слышу о таких понятиях, в
                                                        проектной деятельности не участвовал</tspan>
                                        </text></g>
                                <path fill="#9DC3E6"
                                        d="M10.7 304.91C10.7 303.89 11.52 303.06 12.54 303.06L707.8 303.06 707.8 303.06C708.82 303.06 709.64 303.89 709.64 304.91 709.64 304.91 709.64 304.91 709.64 304.91L709.64 312.29 709.64 312.29C709.64 313.31 708.82 314.13 707.8 314.13L12.54 314.13 12.54 314.13C11.52 314.13 10.7 313.31 10.7 312.29z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 304.91C10.7 303.89 11.52 303.06 12.54 303.06L707.8 303.06 707.8 303.06C708.82 303.06 709.64 303.89 709.64 304.91 709.64 304.91 709.64 304.91 709.64 304.91L709.64 312.29 709.64 312.29C709.64 313.31 708.82 314.13 707.8 314.13L12.54 314.13 12.54 314.13C11.52 314.13 10.7 313.31 10.7 312.29z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.43872, 307.20053)"><text stroke="#000000"
                                                stroke-width="0.24pt" font-family="Lucida Console" font-style="italic"
                                                font-weight="normal" font-stretch="normal" font-size="7.875pt"
                                                fill="#000000" x="0" y="5.0382533">
                                                <tspan x="0" y="5.0382533">4. В чем принципиальное отличие результатов и
                                                        показателей национального проекта?</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.72 320.05C491.72 319.23 492.39 318.57 493.2 318.57L606.22 318.57 606.22 318.57C607.04 318.57 607.7 319.23 607.7 320.05 607.7 320.05 607.7 320.05 607.7 320.05L607.7 325.97 607.7 325.97C607.7 326.78 607.04 327.45 606.22 327.45L493.2 327.45C492.39 327.45 491.72 326.78 491.72 325.97z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.72 320.05C491.72 319.23 492.39 318.57 493.2 318.57L606.22 318.57 606.22 318.57C607.04 318.57 607.7 319.23 607.7 320.05 607.7 320.05 607.7 320.05 607.7 320.05L607.7 325.97 607.7 325.97C607.7 326.78 607.04 327.45 606.22 327.45L493.2 327.45C492.39 327.45 491.72 326.78 491.72 325.97z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.35632, 322.6057)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.79322"
                                                y="3.525539">
                                                <tspan x="20.79322" y="3.525539"><?=$answer4_1?> (<?=$p4_1?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.41 334.41C491.41 332.46 492.98 330.89 494.93 330.89L604.41 330.89 604.41 330.89C606.35 330.89 607.92 332.46 607.92 334.41 607.92 334.41 607.92 334.41 607.92 334.41L607.92 348.49 607.92 348.49C607.92 350.43 606.35 352.01 604.41 352.01L494.93 352.01C492.98 352.01 491.41 350.43 491.41 348.49z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.41 334.41C491.41 332.46 492.98 330.89 494.93 330.89L604.41 330.89 604.41 330.89C606.35 330.89 607.92 332.46 607.92 334.41 607.92 334.41 607.92 334.41 607.92 334.41L607.92 348.49 607.92 348.49C607.92 350.43 606.35 352.01 604.41 352.01L494.93 352.01C492.98 352.01 491.41 350.43 491.41 348.49z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.6381, 335.51825)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.465473"
                                                y="9.050282">
                                                <tspan x="20.465473" y="9.050282"><?=$answer4_2?> (<?=$p4_2?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M490.84 362.39C490.84 359.87 492.88 357.83 495.4 357.83L603.77 357.83 603.77 357.83C606.29 357.83 608.33 359.87 608.33 362.39 608.33 362.39 608.33 362.39 608.33 362.39L608.33 380.61 608.33 380.61C608.33 383.13 606.29 385.17 603.77 385.17L495.4 385.17C492.88 385.17 490.84 383.13 490.84 380.61z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M490.84 362.39C490.84 359.87 492.88 357.83 495.4 357.83L603.77 357.83 603.77 357.83C606.29 357.83 608.33 359.87 608.33 362.39 608.33 362.39 608.33 362.39 608.33 362.39L608.33 380.61 608.33 380.61C608.33 383.13 606.29 385.17 603.77 385.17L495.4 385.17C492.88 385.17 490.84 383.13 490.84 380.61z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.37628, 362.76465)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.64505"
                                                y="11.857958">
                                                <tspan x="20.64505" y="11.857958"><?=$answer4_3?> (<?=$p4_3?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M490.84 392.97C490.84 392.16 491.49 391.51 492.3 391.51L605.9 391.51 605.9 391.51C606.71 391.51 607.36 392.16 607.36 392.97 607.36 392.97 607.36 392.97 607.36 392.97L607.36 398.8 607.36 398.8C607.36 399.6 606.71 400.26 605.9 400.26L492.3 400.26 492.3 400.26C491.49 400.26 490.84 399.6 490.84 398.8z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M490.84 392.97C490.84 392.16 491.49 391.51 492.3 391.51L605.9 391.51 605.9 391.51C606.71 391.51 607.36 392.16 607.36 392.97 607.36 392.97 607.36 392.97 607.36 392.97L607.36 398.8 607.36 398.8C607.36 399.6 606.71 400.26 605.9 400.26L492.3 400.26 492.3 400.26C491.49 400.26 490.84 399.6 490.84 398.8z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 498.46844, 395.5357)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="21.069534"
                                                y="3.4681625">
                                                <tspan x="21.069534" y="3.4681625"><?=$answer4_4?> (<?=$p4_4?>%)</tspan>
                                        </text></g>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M-0 444.11C-0 436.34 6.3 430.05 14.06 430.05L705.94 430.05 705.94 430.05C713.7 430.05 720 436.34 720 444.11 720 444.11 720 444.11 720 444.11L720 500.37 720 500.37C720 508.14 713.7 514.43 705.94 514.43L14.06 514.43 14.06 514.43C6.3 514.43 0 508.14 -0 500.37z">
                                </path>
                                <path fill="#DEEBF7"
                                        d="M12.48 451.22C12.48 450.28 13.25 449.51 14.2 449.51L474.1 449.51 474.1 449.51C475.05 449.51 475.82 450.28 475.82 451.22 475.82 451.22 475.82 451.22 475.82 451.22L475.82 458.08 475.82 458.08C475.82 459.02 475.05 459.79 474.1 459.79L14.2 459.79C13.25 459.79 12.48 459.02 12.48 458.08z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M12.48 451.22C12.48 450.28 13.25 449.51 14.2 449.51L474.1 449.51 474.1 449.51C475.05 449.51 475.82 450.28 475.82 451.22 475.82 451.22 475.82 451.22 475.82 451.22L475.82 458.08 475.82 458.08C475.82 459.02 475.05 459.79 474.1 459.79L14.2 459.79C13.25 459.79 12.48 459.02 12.48 458.08z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 20.184296, 453.61124)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="4.160248">
                                                <tspan x="0" y="4.160248">КТ – это компьютерный томограф</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.9 465.18C11.9 464.28 12.63 463.54 13.53 463.54L474.23 463.54 474.23 463.54C475.13 463.54 475.87 464.28 475.87 465.18 475.87 465.18 475.87 465.18 475.87 465.18L475.87 471.73 475.87 471.73C475.87 472.64 475.13 473.37 474.23 473.37L13.53 473.37 13.53 473.37C12.63 473.37 11.9 472.64 11.9 471.73z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.9 465.18C11.9 464.28 12.63 463.54 13.53 463.54L474.23 463.54 474.23 463.54C475.13 463.54 475.87 464.28 475.87 465.18 475.87 465.18 475.87 465.18 475.87 465.18L475.87 471.73 475.87 471.73C475.87 472.64 475.13 473.37 474.23 473.37L13.53 473.37 13.53 473.37C12.63 473.37 11.9 472.64 11.9 471.73z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.575699, 467.6245)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="0"
                                                y="3.9560752">
                                                <tspan x="0" y="3.9560752">КТ – это срок окончания проекта</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.87 480.35C11.87 478.56 13.33 477.1 15.13 477.1L473.23 477.1 473.23 477.1C475.03 477.1 476.48 478.56 476.48 480.35 476.48 480.35 476.48 480.35 476.48 480.35L476.48 493.36 476.48 493.36C476.48 495.16 475.03 496.62 473.23 496.62L15.13 496.62 15.13 496.62C13.33 496.62 11.87 495.16 11.87 493.36z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.87 480.35C11.87 478.56 13.33 477.1 15.13 477.1L473.23 477.1 473.23 477.1C475.03 477.1 476.48 478.56 476.48 480.35 476.48 480.35 476.48 480.35 476.48 480.35L476.48 493.36 476.48 493.36C476.48 495.16 475.03 496.62 473.23 496.62L15.13 496.62 15.13 496.62C13.33 496.62 11.87 495.16 11.87 493.36z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 20.027374, 481.65222)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="13.728256">
                                                <tspan x="0" y="2.928255">КТ – это конкретная дата (срок окончания
                                                        мероприятия (результата)), которая</tspan>
                                                <tspan xml:space="preserve" x="406.71387" y="2.928255"> </tspan>
                                                <tspan x="0" y="13.728256">позволяет контролировать процесс реализации
                                                        проекта</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M11.9 501.84C11.9 500.91 12.65 500.15 13.58 500.15L474.18 500.15 474.18 500.15C475.11 500.15 475.87 500.91 475.87 501.84 475.87 501.84 475.87 501.84 475.87 501.84L475.87 508.59 475.87 508.59C475.87 509.53 475.11 510.28 474.18 510.28L13.58 510.28C12.65 510.28 11.9 509.53 11.9 508.59z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M11.9 501.84C11.9 500.91 12.65 500.15 13.58 500.15L474.18 500.15 474.18 500.15C475.11 500.15 475.87 500.91 475.87 501.84 475.87 501.84 475.87 501.84 475.87 501.84L475.87 508.59 475.87 508.59C475.87 509.53 475.11 510.28 474.18 510.28L13.58 510.28C12.65 510.28 11.9 509.53 11.9 508.59z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 19.590378, 504.24506)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#2E75B6" x="0"
                                                y="4.093762">
                                                <tspan x="0" y="4.093762">Первый раз слышу о понятии, в проектной деятельности не участвовал
                                                        </tspan>
                                        </text></g>
                                <path fill="#9DC3E6"
                                        d="M10.7 435.12C10.7 433.9 11.69 432.91 12.91 432.91L707.43 432.91 707.43 432.91C708.65 432.91 709.64 433.9 709.64 435.12 709.64 435.12 709.64 435.12 709.64 435.12L709.64 443.96 709.64 443.96C709.64 445.18 708.65 446.17 707.43 446.17L12.91 446.17C11.69 446.17 10.7 445.18 10.7 443.96z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M10.7 435.12C10.7 433.9 11.69 432.91 12.91 432.91L707.43 432.91 707.43 432.91C708.65 432.91 709.64 433.9 709.64 435.12 709.64 435.12 709.64 435.12 709.64 435.12L709.64 443.96 709.64 443.96C709.64 445.18 708.65 446.17 707.43 446.17L12.91 446.17C11.69 446.17 10.7 445.18 10.7 443.96z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 18.545868, 437.15338)"><text stroke="#000000"
                                                stroke-width="0.24pt" font-family="Lucida Console" font-style="italic"
                                                font-weight="normal" font-stretch="normal" font-size="7.875pt"
                                                fill="#000000" x="0" y="6.0286636">
                                                <tspan x="0" y="6.0286636">5. Что представляет собой контрольная точка
                                                        проекта (КТ):</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M492.29 450.91C492.29 449.91 493.09 449.11 494.09 449.11L605.9 449.11 605.9 449.11C606.9 449.11 607.7 449.91 607.7 450.91 607.7 450.91 607.7 450.91 607.7 450.91L607.7 458.11 607.7 458.11C607.7 459.1 606.9 459.91 605.9 459.91L494.09 459.91 494.09 459.91C493.09 459.91 492.29 459.1 492.29 458.11z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M492.29 450.91C492.29 449.91 493.09 449.11 494.09 449.11L605.9 449.11 605.9 449.11C606.9 449.11 607.7 449.91 607.7 450.91 607.7 450.91 607.7 450.91 607.7 450.91L607.7 458.11 607.7 458.11C607.7 459.1 606.9 459.91 605.9 459.91L494.09 459.91 494.09 459.91C493.09 459.91 492.29 459.1 492.29 458.11z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 500.0156, 453.23526)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="25.792892"
                                                y="4.393767">
                                                <tspan x="20.792892" y="4.393767"><?=$answer5_1?> (<?=$p5_1?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.97 464.47C491.97 463.47 492.78 462.67 493.77 462.67L606.12 462.67 606.12 462.67C607.12 462.67 607.92 463.47 607.92 464.47 607.92 464.47 607.92 464.47 607.92 464.47L607.92 471.67 607.92 471.67C607.92 472.66 607.12 473.47 606.12 473.47L493.77 473.47C492.78 473.47 491.97 472.66 491.97 471.67z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.97 464.47C491.97 463.47 492.78 462.67 493.77 462.67L606.12 462.67 606.12 462.67C607.12 462.67 607.92 463.47 607.92 464.47 607.92 464.47 607.92 464.47 607.92 464.47L607.92 471.67 607.92 471.67C607.92 472.66 607.12 473.47 606.12 473.47L493.77 473.47C492.78 473.47 491.97 472.66 491.97 471.67z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.69995, 466.79462)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.686356"
                                                y="4.3961244">
                                                <tspan x="20.686356" y="4.3961244"><?=$answer5_2?> (<?=$p5_2?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.41 480.11C491.41 478.36 492.83 476.94 494.58 476.94L605.15 476.94 605.15 476.94C606.9 476.94 608.32 478.36 608.32 480.11 608.32 480.11 608.32 480.11 608.32 480.11L608.32 492.8 608.32 492.8C608.32 494.55 606.9 495.97 605.15 495.97L494.58 495.97 494.58 495.97C492.83 495.97 491.41 494.55 491.41 492.8z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.41 480.11C491.41 478.36 492.83 476.94 494.58 476.94L605.15 476.94 605.15 476.94C606.9 476.94 608.32 478.36 608.32 480.11 608.32 480.11 608.32 480.11 608.32 480.11L608.32 492.8 608.32 492.8C608.32 494.55 606.9 495.97 605.15 495.97L494.58 495.97 494.58 495.97C492.83 495.97 491.41 494.55 491.41 492.8z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.53586, 481.47263)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.766045"
                                                y="8.105558">
                                                <tspan x="20.766045" y="8.105558"><?=$answer5_3?> (<?=$p5_3?>%)</tspan>
                                        </text></g>
                                <path fill="#DEEBF7"
                                        d="M491.41 501.41C491.41 500.43 492.2 499.64 493.18 499.64L605.59 499.64 605.59 499.64C606.57 499.64 607.36 500.43 607.36 501.41 607.36 501.41 607.36 501.41 607.36 501.41L607.36 508.51 607.36 508.51C607.36 509.49 606.57 510.28 605.59 510.28L493.18 510.28C492.2 510.28 491.41 509.49 491.41 508.51z">
                                </path>
                                <path stroke-width="1" stroke="#41719C" fill="none"
                                        d="M491.41 501.41C491.41 500.43 492.2 499.64 493.18 499.64L605.59 499.64 605.59 499.64C606.57 499.64 607.36 500.43 607.36 501.41 607.36 501.41 607.36 501.41 607.36 501.41L607.36 508.51 607.36 508.51C607.36 509.49 606.57 510.28 605.59 510.28L493.18 510.28C492.2 510.28 491.41 509.49 491.41 508.51z">
                                </path>
                                <g transform="matrix(1, 0, 0, 1, 499.12637, 503.7597)"><text
                                                font-family="Lucida Console" font-style="normal" font-weight="normal"
                                                font-stretch="normal" font-size="6.75pt" fill="#0070C0" x="20.694267"
                                                y="4.3239374">
                                                <tspan x="20.694267" y="4.3239374"><?=$answer5_4?> (<?=$p5_4?>%)</tspan>
                                        </text></g>
                        </g>
                </svg></div>


        <?php

        echo '</div>';

        echo '</div>';

        echo '<hr>';
        ?>

        <hr>

        <h3><a href="./result.php">Обновить страницу</a></h3>

        <hr>

        <h3><a href="../index.php">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
        <img width="40%" src="../qr-code.png" alt="qr-code">
        <hr>

        <h3><a href="../del_result.php">Сбросить голоса</a></h3>

        <hr>



</body>

</html>